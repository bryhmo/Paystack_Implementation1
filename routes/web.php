<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaystackController;
use App\Http\Controllers\paycontroller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('paystack.com',[PaystackController::class,'mypayment']);
// Route::get('price.com',[PaystackController::class,'propayment']);
// Route::post('testdata',[PaystackController::class,'responsedata']);
// Route::get('pay/callback',[PaystackController::class,'payment_callback'])->name('pay.callback');
Route::get('paystack.com',[paycontroller::class,'mypayment']);
Route::post('payment',[paycontroller::class,'make_payment'])->name('payment');
