<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Subscription;
use Midtrans\Config;

class SubscriptionController extends Controller
{
    function __construct() {
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }
    public function showPlans()
{
    $plans = [
        ['name' => 'Premium 1 Bulan', 'price' => 50000],
        ['name' => 'Premium 3 Bulan', 'price' => 120000],
    ];

    return view('subscriptions.plans', compact('plans'));
}

public function subscribe(Request $request)
{
    $request->validate([
        'plan_name' => 'required',
        'price' => 'required|numeric',
    ]);

    $transactionDetails = [
        'order_id' => 'ORDER-' . time(),
        'gross_amount' => $request->price,
    ];

    $customerDetails = [
        'first_name' => auth()->user()->name,
        'email' => auth()->user()->email,
    ];

    $payload = [
        'transaction_details' => $transactionDetails,
        'customer_details' => $customerDetails,
    ];

    $snapToken = \Midtrans\snap::getSnapToken($payload);

    return view('subscriptions.payment', compact('snapToken'));
}

public function callback(Request $request)
{
    $data = $request->all();

    if ($data['transaction_status'] === 'settlement') {
        $user = auth()->user();
        $user->update([
            'is_premium' => true,
            'premium_until' => now()->addMonth(), // Sesuaikan dengan paket
        ]);

        Subscription::create([
            'user_id' => $user->id,
            'plan_name' => $data['order_id'],
            'price' => $data['gross_amount'],
            'start_date' => now(),
            'end_date' => now()->addMonth(),
        ]);
    }

    return response()->json(['message' => 'Callback processed.']);
}


}
