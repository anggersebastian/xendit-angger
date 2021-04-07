<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Xendit\Xendit;

class PaymentController extends Controller
{
    public function index(){
        return view('Payment.VirtualAccount');
    }
    
    public function submit(Request $request){
        $extId = $request->input('external_id');
        $amount = $request->input('amount');
        $payer_email = $request->input('payer_email');
        $description = $request->input('description');
    
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.xendit.co/v2/invoices',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'external_id='.$extId.'&payer_email='.$payer_email.'&description='.urlencode($description).'&amount='.$amount,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic eG5kX2RldmVsb3BtZW50X0xyMGlrSFFuaE80SFF3Z2ZQYjNtTWZBQjh1S3hTWWFOUDM1MzEyWk9RSmdVNUdPdlRDMjlhWG1lUXM3NU8wOg==',
            'Content-Type: application/x-www-form-urlencoded',
            'Cookie: incap_ses_1113_2182539=c+JoN1BjvxvDR7Q/7ityD4oebWAAAAAANYY4MGAkAl/Us0Bdfzt7EQ==; nlbi_2182539=rsIaWGV3qz3hGUU8jjCKbQAAAADsqbQEVbt+O34LuTspfCMe; visid_incap_2182539=GR8YoIgVR9uqhhGj1UKzA024a2AAAAAAQUIPAAAAAAAAUg62RoqMP1LiZQ8wILGz'
        ),
        ));
    
        $response = curl_exec($curl);
    
        curl_close($curl);
        echo $response;
    }
}
