<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $adminWhatsAppNumber = '6285263849464'; // Ganti dengan nomor WhatsApp admin
        $message = "Name: {$validated['name']}\n"
            . "Email: {$validated['email']}\n"
            . "Phone: {$validated['phone']}\n"
            . "Message: {$validated['message']}";

        $whatsAppUrl = "https://api.whatsapp.com/send?phone={$adminWhatsAppNumber}&text=" . urlencode($message);

        return response()->json(['url' => $whatsAppUrl], 200);
    }
}
