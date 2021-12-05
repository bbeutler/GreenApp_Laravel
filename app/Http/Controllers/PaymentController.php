<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private $currency;
    private $amount;


    public function sendMoney(Request $request){

        $transactions = $request->validate([
           'firstName'       => 'required',
           'lastName'        => 'required',
           'phoneNumber'     => 'required',
           'amountToRecieve' => 'required',
           'recieveCurrency' => 'required',
           'amountToSend'    => 'required',
           'amountToRecieve' => 'required'
       ]);

       $currency  = $request->sendCurrency;

       $amount    = $transactions['amountToSend'];

       $collected_data  = [

        "tx_ref"          => time(),
        "amount"          => $amount,
        "currency"        => $currency,
        "redirect_url"    => "http://127.0.0.1:8000/send-money",
        "payment_options" => "card",
        "meta" => [
           "price"=> $amount
        ],
        "customer" => [

           "email"=>  'ayo@gmail.com'
        ],
        "customizations"=> [
           "title"=> "Pied Piper Payments",
           "description"=> "Middleout isn't free. Pay the price",
           "logo"=> "https://assets.piedpiper.com/logo.png"
        ]
     ];

     //send Data to flutterwave Endpoints::-->

     $curl = curl_init();

     curl_setopt_array($curl, array(
       CURLOPT_URL            => "https://api.flutterwave.com/v3/payments",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING       => '',
         CURLOPT_FOLLOWLOCATION => true,
         CURLOPT_TIMEOUT       =>  0,
         CURLOPT_MAXREDIRS      => 10,
       CURLOPT_CUSTOMREQUEST  => "POST",
       CURLOPT_POSTFIELDS     => json_encode($collected_data),
         CURLOPT_HTTPHEADER => array(
         "Authorization: FLWSECK-0bb5bcb9f43c87d58aa78ec3f420c00e-X",
         "content-type: application/json",
         "cache-control: no-cache"       
       ),
     ));


     $response = curl_exec($curl);


     //Decode the JSON request

     $result = json_decode($response);


     //Check if the the result status is successful -->

     if (!empty($result)) {
       
       if ($result->status  == "success") {

           

         $link  = $result->data->link;

         return redirect()->to($link);



       }else{

         echo "We cannot process your request!";
       }


     }else{

       echo"Check your Internet Connection Please seems you are not connected!";

     }
    }


   
}
