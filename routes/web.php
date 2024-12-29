<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\PremiumController;   
use App\Http\Controllers\WhatsAppController;  

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/subscriptions', [SubscriptionController::class, 'showPlans'])->name('subscriptions.plans');
Route::post('/subscriptions/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscriptions.subscribe');
Route::post('/subscriptions/callback', [SubscriptionController::class, 'callback'])->name('subscriptions.callback');


Route::get('/premium/feature', [PremiumController::class, 'premiumFeature'])
    ->name('premium.feature')
    ->middleware('auth'); // Pastikan pengguna login


// routes/web.php
Route::get('/about', function () {
    return view('about');
})->name('about'); // Tambahkan nama untuk route ini

Route::get('/contact', function () {
    return view('contact');
})->name('contact'); // Tambahkan nama untuk route ini

Route::get('/premium', function () {
    return view('premium');
})->name('premium'); // Tambahkan nama untuk route ini

Route::get('/beasiswaPage', function () {
    return view('beasiswaPage');
}) ->name('beasiswaPage');

Route::get('/lombaPage', function () {
    return view('lombaPage');
}) ->name('lombaPage');

Route::get('/webinarPage', function () {
    return view('webinarPage');
}) ->name('webinarPage');

Route::get('/bootcampPage', function () {
    return view('bootcampPage');
}) ->name('bootcampPage');

Route::get('/ebookPage', function () {
    return view('ebookPage');
}) ->name('ebookPage');

Route::get('/read', function () {
    return view('read');
}) ->name('read');

Route::get('/buy', function () {
    return view('buy');
}) ->name('buy');

Route::get('berlangganan', function() {
    return view('berlangganan');
}) -> name('berlangganan');

Route::get('/premium', [PremiumController::class, 'index'])->name('premium');

Route::post('/send-message', [WhatsAppController::class, 'sendMessage']);




Route::post('/payment/midtrans-callback', [PaymentController::class, 'midtransCallback']);
Route::get('/payment/createTransaction/{id}', [PaymentController::class, 'createTransaction'])->name("payment.createTransaction");
require __DIR__.'/auth.php';
