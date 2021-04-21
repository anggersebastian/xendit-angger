<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DragonPayment;

class DragonpayController extends Controller
{
    public function coba(){
        return view('Dragonpay.CreatePayment');
    }

    public function test(){
        $errors = array();
        $is_link = false;

        $parameters = array(
            'merchantid' => env('MERCHANT_ID'),
            'txnid' => '000001',
            'amount' => 100,
            'ccy' => 'PHP',
            'description' => 'My order description.',
            'email' => 'sample@merchant.ph',
        );

        $fields = array(
            'txnid' => array(
                'label' => 'Transaction ID',
                'type' => 'text',
                'attributes' => array(),
                'filter' => FILTER_SANITIZE_STRING,
                'filter_flags' => array(FILTER_FLAG_STRIP_LOW),
            ),
            'amount' => array(
                'label' => 'Amount',
                'type' => 'number',
                'attributes' => array('step="0.01"'),
                'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
                'filter_flags' => array(FILTER_FLAG_ALLOW_THOUSAND, FILTER_FLAG_ALLOW_FRACTION),
            ),
            'description' => array(
                'label' => 'Description',
                'type' => 'text',
                'attributes' => array(),
                'filter' => FILTER_SANITIZE_STRING,
                'filter_flags' => array(FILTER_FLAG_STRIP_LOW),
            ),
            'email' => array(
                'label' => 'Email',
                'type' => 'email',
                'attributes' => array(),
                'filter' => FILTER_SANITIZE_EMAIL,
                'filter_flags' => array(),
            ),
        );

        if (isset($_POST['submit'])) {
            // Check for set values.
            foreach ($fields as $key => $value) {
            // Sanitize user input. However:
            // NOTE: this is a sample, user's SHOULD NOT be inputting these values.
            if (isset($_POST[$key])) {
                $parameters[$key] = filter_input(INPUT_POST, $key, $value['filter'],
                    array_reduce($value['filter_flags'], function ($a, $b) { return $a | $b; }, 0));
            }
            }

            // Validate values.
            // Example, amount validation.
            // Do not rely on browser validation as the client can manually send
            // invalid values, or be using old browsers.
            if (!is_numeric($parameters['amount'])) {
            $errors[] = 'Amount should be a number.';
            }
            else if ($parameters['amount'] <= 0) {
            $errors[] = 'Amount should be greater than 0.';
            }

            if (empty($errors)) {
            // Transform amount to correct format. (2 decimal places,
            // decimal separated by period, no thousands separator)
            $parameters['amount'] = number_format($parameters['amount'], 2, '.', '');
            // Unset later from parameter after digest.
            $parameters['key'] = env('MERCHANT_PASSWORD');
            $digest_string = implode(':', $parameters);
            unset($parameters['key']);
            // NOTE: To check for invalid digest errors,
            // uncomment this to see the digest string generated for computation.
            // var_dump($digest_string); $is_link = true;
            $parameters['digest'] = sha1($digest_string);
            $url = 'https://gw.dragonpay.ph/Pay.aspx?';
            if ($environment == env('DRAGON_TEST')) {
                $url = 'http://test.dragonpay.ph/Pay.aspx?';
            }

            $url .= http_build_query($parameters, '', '&');

            if ($is_link) {
                echo '<br><a href="' . $url . '">' . $url . '</a>';
            }
            else {
                header("Location: $url");
            }
            }
        }
        return view('Dragonpay.CreatePayment', compact('fields', 'parameters'));
    }

    public function test1(){
        $parameters = array(
            'merchantid' => env('MERCHANT_ID'),
            'txnid' => '12345678',
            'amount' => 2000,
            'ccy' => 'PHP',
            'description' => 'testing api',
            'email' => 'testing@gmail.com',
        );

        $parameters['amount'] = number_format($parameters['amount'], 2, '.', '');
        $parameters['secretkey'] = env('MERCHANT_PASSWORD');       
        $digest_string = implode(':', $parameters);
        $parameters['digest'] = sha1($digest_string);
        echo $parameters['digest'];
    }
}
