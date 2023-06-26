<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaystackController extends Controller
{
    //this is the function of the paystack managemeent
    public function mypayment()
    {
        return view('mypayment.index');
    }
    public function propayment()
    {
        return view('mypayment.pricefrom');
    }
}
