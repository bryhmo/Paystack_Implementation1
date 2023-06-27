<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaystackController;

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

Route::get('paystack.com',[PaystackController::class,'mypayment']);
Route::get('price.com',[PaystackController::class,'propayment']);
Route::post('testdata',[PaystackController::class,'responsedata']);