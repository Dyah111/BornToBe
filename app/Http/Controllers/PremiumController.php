<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumController extends Controller
{
    public function index()
    {
        // Cek apakah pengguna premium
        if (!auth()->user()->is_premium) {
            // return redirect()->route('subscriptions.plans')
            //     ->with('error', 'Anda harus berlangganan untuk mengakses fitur ini.');
            return view("premium");
        }

        // Jika premium, tampilkan view fitur premium
        return view('premium.feature');

        $snapToken = \Midtrans\Snap::getSnapToken($payload);
        return view('subscriptions.payment', compact('snapToken'));

    }


}
