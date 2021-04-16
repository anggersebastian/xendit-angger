<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
    public function createInvoice(){
        return view('Payment.CreateInvoice');
    }

    public function createOutlet(){
        return view('Payment.CreateOutlet');
    }

    public function paymentCode(){
        return view('Payment.CodeOutlet');
    }

    //xendit submit payment
    public function submit(Request $request){
        $payer_email = $request->input('payer_email');
        $description = $request->input('description');
        $exId = uniqid();
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
            CURLOPT_POSTFIELDS => 'external_id='.$exId.'&payer_email='.$payer_email.'&description='.$description.'&amount=250000',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic eG5kX2RldmVsb3BtZW50X0xyMGlrSFFuaE80SFF3Z2ZQYjNtTWZBQjh1S3hTWWFOUDM1MzEyWk9RSmdVNUdPdlRDMjlhWG1lUXM3NU8wOg==',
                'username: xnd_development_Lr0ikHQnhO4HQwgfPb3mMfAB8uKxSYaNP35312ZOQJgU5GOvTC29aXmeQs75O0',
                'Content-Type: application/x-www-form-urlencoded',
                'Cookie: visid_incap_2182539=GR8YoIgVR9uqhhGj1UKzA024a2AAAAAAQUIPAAAAAAAAUg62RoqMP1LiZQ8wILGz'
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response, TRUE);
        $url = $response['invoice_url'];
        $payer_email = $response['payer_email'];
        $description = $response['description'];
        $status = $response['status'];

        curl_close($curl);

        $submit = new Payment();
        $submit->external_id = $exId;
        $submit->payer_email = $payer_email;
        $submit->description = $description;
        $submit->status = $status;
        $submit->save();

        return redirect(url($url));
    }

    //xendit callback invoice
    public function insertInvoice(Request $request){
        $payment = Payment::where('external_id', $request->external_id)->first();
        $payment->status = $request->get('status');
        $payment->save();
        if ($payment->status == 'PAID') {
            return response('Update Berhasil!');
        } else {
            return response('Update Gagal!');
        }
    }

    //xendit submit outlet
    public function outletSubmit(Request $request){
        $name = $request->input('name');
        $outlet = $request->input('outlet');
        $exId = uniqid();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.xendit.co/fixed_payment_code/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'external_id='.$exId.'&name='.$name.'&retail_outlet_name='.$outlet.'&expected_amount=250000',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Basic eG5kX2RldmVsb3BtZW50X0xyMGlrSFFuaE80SFF3Z2ZQYjNtTWZBQjh1S3hTWWFOUDM1MzEyWk9RSmdVNUdPdlRDMjlhWG1lUXM3NU8wOg==',
                'username: xnd_development_Lr0ikHQnhO4HQwgfPb3mMfAB8uKxSYaNP35312ZOQJgU5GOvTC29aXmeQs75O0',
                'Content-Type: application/x-www-form-urlencoded',
                'Cookie: visid_incap_2182539=GR8YoIgVR9uqhhGj1UKzA024a2AAAAAAQUIPAAAAAAAAUg62RoqMP1LiZQ8wILGz'
            ),
        ));

        $response = curl_exec($curl); 
        $response = json_decode($response, TRUE);
        $status = $response['status']; // response status ke db yaitu active
        $name = $response['name'];
        $outlet = $response['retail_outlet_name'];
        $payment_code = $response['payment_code'];
        curl_close($curl);
        
        $outletSubmit = new Payment();
        $outletSubmit->external_id = $exId;
        $outletSubmit->payer_email = $name;
        $outletSubmit->description = $outlet;
        $outletSubmit->status = $status;
        $outletSubmit->save();

        return view('Payment.CodeOutlet', compact('payment_code', 'outlet'));
    }

    //xendit callback outlet
    public function insertOutlet(Request $request){
        $paymentOutlet = Payment::where('external_id', $request->external_id)->first();
        $paymentOutlet->status = $request->get('status');
        $paymentOutlet->save();
        if ($paymentOutlet->status == 'SETTLING' || $paymentOutlet->status == 'COMPLETED') {
            return response('User already settled or completed!');
        } else {
            return response('User still not completed the payment!');
        }
    }
}


