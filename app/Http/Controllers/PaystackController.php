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
    public function payment_callback()
    {
        $response = json_decode($this->verify_payment(Request('refrence')));
      return view('pay.callback_page');
    }

    public function make_payment()
    {

        return view('mypayment.testdata');
        $formData =array([
            'email'=>request('email'),
            'amount'=>request('amount')*100,
            'callback_url'=> route('pay.callback'),
        ]);

        $pay = json_decode($this->initiate_payment($formData));
        if($pay)
        //dd($pay);
        {
            if($pay->status)
            {
                return redirect($pay->data->authorization_url);
                //dd($pay);
            }
            else
            {
                return back()->withError($pay->message);
            }
        }
        else 
        {
            return back()->withError("something went wrong");
        }
    }
    public function initiate_payment()
    {
         $url ="https://api.paystack.co/transaction/initialize";
         //this is the customer url that will be generated for payment initialization
         $ch = curl_init();
         curl_setopt($ch,CURLOPT_URL,$url);
         curl_setopt($ch,CURLOPT_POST,true);
         curl_setopt($ch,CURLOPT_FIELDS,$fields_string);
         curl_setopt($ch,CURLOPT_HTTPHEADER, array(
            "Authorization:Bearer".env("PAYSTACK_SECRET_KEY"),
            "cache-control:no-cache",
         ));
         curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
         $result =curl_exec($ch);
         curl_close($ch);
         return $result;

    }
    public function verify_payment($refrence)
    {
        $curl =curl_init();
        curl_setopt_array($cur,array([
            CURLOPT_URL => "",
            CURLOPT_RETURNTRANSFER=> true,
            CURLOPT_ENCODNG => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array([
                "authorization:Bearer" .env(PAYSTACK_SECRET_KEY),
                "cache-control:no-cache"
            ]),
        ]));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}
