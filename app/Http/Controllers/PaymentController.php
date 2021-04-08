<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        return view('Payment.VirtualAccount');
    }

    public function submit(Request $request){
        $payer_email = $request->input('payer_email');
        $description = $request->input('description');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.xendit.co/v2/invoices',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'external_id=demo_112&payer_email='.$payer_email.'&description='.$description.'&amount=250000',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic eG5kX2RldmVsb3BtZW50X0xyMGlrSFFuaE80SFF3Z2ZQYjNtTWZBQjh1S3hTWWFOUDM1MzEyWk9RSmdVNUdPdlRDMjlhWG1lUXM3NU8wOg==',
            'username: xnd_development_Lr0ikHQnhO4HQwgfPb3mMfAB8uKxSYaNP35312ZOQJgU5GOvTC29aXmeQs75O0',
            'Content-Type: application/x-www-form-urlencoded',
            'Cookie: visid_incap_2182539=GR8YoIgVR9uqhhGj1UKzA024a2AAAAAAQUIPAAAAAAAAUg62RoqMP1LiZQ8wILGz'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return ['status' => 'Payment Success Please Check Invoice'];
    }
}
