<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use App\Models\id_premium;
use App\Models\Order;
use App\Models\User;

class PaymentController extends Controller
{
    public function createTransaction(Request $reques, $id)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $getProduct = id_premium::find($id);
        $order = Order::create([
            "order_id"=> 'ORDER-' . uniqid(),
            'user_id' => auth()->user()->id,
            'id_premium' => $id,
            'status' => 'pending'
        ]);
        // Data transaksi
        $params = [
            'transaction_details' => [
                'order_id' => $order->order_id,
                'gross_amount' => $getProduct->price,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name,
                'email' => auth()->user()->email,
            ],
        ];

        try {
            // Buat transaksi dan ambil token Snap
            $snapToken = Snap::getSnapToken($params);
            return view("premium", ["snapToken" => $snapToken]);
            // return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    private function getStatus($status, $fraudStatus): string {
        return match ($status) {
            'capture' => ($fraudStatus == 'accept') ? 'success' : 'pending',
            'settlement' => 'success',
            'deny' => 'failed',
            'cancel' => 'cancel',
            'expire' => 'expire',
            'pending' => 'pending',
            default => 'unknown',
        };
    }

    public function midtransCallback(Request $request) {
        $order_id = $request->order_id;
        $status = $request->status_code;
        $transaction_status = $request->transaction_status;
        $fraud_status = $request->transaction_status;

        $getStatus = $this->getStatus($transaction_status, $fraud_status);
        if ($getStatus === "success") {
            $getOrder = Order::where("order_id", $order_id)->first();
            if ($getOrder !== null) {

                $getOrder->status = $getStatus;
                $getOrder->save();
    
                $getUser = User::find($getOrder->user_id);
                $getUser->is_premium = true;
                $getUser->save();
            }
        } 
    }
}
