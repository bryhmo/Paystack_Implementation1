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

    public function responsedata()
    {

        return view('mypayment.testdata');
    //     $formData =array([
    //         'email'=>request('email'),
    //          'amount'=>request('amount'),

    //     ]);
    }
    public function initiate_payment()
    {
        //  $url ="https://api.paystack.co/transaction/initialize";
        // $ch = curl_init();

    }
}
