<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DragonPayment;

class DragonpayController extends Controller
{
    public function form(){
        return view('Dragonpay.form');
    }
}
