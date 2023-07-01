<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paycontroller extends Controller
{
    //
    public function mypayment()
    {
        return view('pay.index');

    }

    //make payment function 
    public function make_payment()
    {
        $formData =array([
            'name'=>Request('name'),
            'email'=>Request('email'),
            'amount'=>Request('amount')
            //'callback_url'=> route('pay.callback'),
        ]);

        $pay = json_decode($this->initiate_payment($formData));
       if($pay)
        {
            if($pay->status)
            {
               //return redirect($pay->data->authorization_url);
                dd($pay);
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


    public function initiate_payment($formData)
    {
         $url ="https://api.paystack.co/transaction/initialize";
         //this is the customer url that will be generated for payment initialization
         $fields_string=http_build_query($formData);
         $ch = curl_init();
         curl_setopt($ch,CURLOPT_URL,$url);
         curl_setopt($ch,CURLOPT_POST,true);
         curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);
         curl_setopt($ch,CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer" ,//. env("PAYSTACK_SECRET_KEY"),
            "Cache-Control: no-cache"
         ));
         curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
         $result =curl_exec($ch);
         curl_close($ch);
         return $result;

    }
}
