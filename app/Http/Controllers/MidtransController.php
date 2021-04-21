<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MidtransPayment;

class MidtransController extends Controller
{
    public function form(){
        return view('Midtrans.form');
    }

    public function midtransSubmit(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $exId = uniqid();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://app.sandbox.midtrans.com/snap/v1/transactions',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 
            '{
                "transaction_details": {
                    "order_id": "' . $exId . '",
                    "gross_amount": 250000
                },
                "credit_card":{
                    "secure" : true
                },
                "customer_details": {
                    "first_name": "' . $name . '",
                    "email": "' . $email . '",
                    "phone": "' . $phone . '"
                }
            }',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Content-Type: application/json',
                'Authorization: Basic U0ItTWlkLXNlcnZlci1hTXpkLXpxTXlYVHh6QTR2LW5MMFNzWkE6'
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response, TRUE);
        $token = $response['token'];
        curl_close($curl);

        $midtransSubmit = new MidtransPayment();
        $midtransSubmit->order_id = $exId;
        $midtransSubmit->name = $name;
        $midtransSubmit->email = $email;
        $midtransSubmit->phone = $phone;
        $midtransSubmit->status = "PENDING";
        $midtransSubmit->save();

        return view('Midtrans.AfterSubmit', compact('token', 'name', 'phone', 'email'));
    }

    public function getTransaction(Request $request){
        $midtransPayment = MidtransPayment::where('order_id', $request->order_id)->first();
        $midtransPayment->status = $request->get('fraud_status');
        $midtransPayment->save();
        return response('success');
        // if ($payment->status == 'PAID') {
        //     return response('Update Berhasil!');
        // } else {
        //     return response('Update Gagal!');
        // }
    }

    // public function getTransaction(Request $request){
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => 'https://api.sandbox.midtrans.com/v2/607f97bfee49a/status',
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => false,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'GET',
    //         CURLOPT_HTTPHEADER => array(
    //             'Accept: application/json',
    //             'Content-Type: application/json',
    //             'Authorization: Basic U0ItTWlkLXNlcnZlci1hTXpkLXpxTXlYVHh6QTR2LW5MMFNzWkE6'
    //         ),
    //     ));

    //     $response = curl_exec($curl);
    //     $response = json_decode($response, TRUE);
    //     $orderId = $response['order_id'];
    //     $transactionStatus = $response['transaction_status'];
    //     curl_close($curl);
    //     echo $transactionStatus;

    // }
}
