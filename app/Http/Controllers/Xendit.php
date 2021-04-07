<?php

namespace App\Xendit;

use XenditClient\XenditPHPClient;

class Xendit
{
    private $xenditPHPClient;

    public function __construct()
    {
        $key['secret_api_key'] = env('XENDIT_SECRET_API_KEY');
        $this->xenditPHPClient = new XenditPHPClient($key);
    }

    public function Xendit()
    {
        return $this->xendit;
    }

    public function createInvoice($externalId, $amount, $payerEmail, $description, $invoiceOptions, $company = 'esd')
    {
        if ($company == 'expo') {
            $key['secret_api_key'] = env('XENDIT_SECRET_API_KEY_EXPO');
            $this->xenditPHPClient = new XenditPHPClient($key);
        }
        $invoice = $this->xenditPHPClient->createInvoice($externalId, (int)$amount, $payerEmail, $description, $invoiceOptions);
        return $invoice;
    }

    public function createFixedPaymentCodeRetailOutlets($externalId, $name, $amount, $type, $company = 'esd') {
        $key = env('XENDIT_SECRET_API_KEY') . ":";
        if ($company == 'expo') {
            $key = env('XENDIT_SECRET_API_KEY_EXPO') . ":";
        }
        $curl = curl_init();

        $headers = array();
        $headers[] = 'Content-Type: application/json';

        $end_point = 'https://api.xendit.co/fixed_payment_code';

        $data['external_id'] = $externalId;
        $data['retail_outlet_name'] = strtoupper($type);
        $data['name'] = $name;
        $data['expected_amount'] = $amount;
        $data['is_single_use'] = true;

        $payload = json_encode($data);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_USERPWD, $key);
        curl_setopt($curl, CURLOPT_URL, $end_point);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);
        curl_close($curl);

        $responseObject = json_decode($response, true);
        return $responseObject;
    }
}