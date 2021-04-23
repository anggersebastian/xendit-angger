<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/thanks', 'HomeController@thankYou')->name('thankYou');

// Xendit 
Route::get('/xendit/payment', 'PaymentController@createInvoice');
Route::post('/xendit/submit', 'PaymentController@submit')->name('form.submit');
Route::get('/xendit/payment-outlet', 'PaymentController@createOutlet')->name('outlet.form');
Route::post('/xendit/submit-outlet', 'PaymentController@outletSubmit')->name('outlet.submit');
Route::get('/xendit/payment-code', 'PaymentController@paymentCode');

// Midtrans
Route::get('/midtrans/payment', 'MidtransController@form');
Route::post('/midtrans/submit', 'MidtransController@midtransSubmit')->name('form1.submit');
Route::get('/midtrans/submit2', 'MidtransController@midtransSubmit')->name('form2.submit');
Route::get('/midtrans/transaction', 'MidtransController@getTransaction');

// Dragonpay
Route::get('/dragonpay/payment', 'DragonpayController@form');

//test
Route::get('test', 'DragonpayController@coba');
Route::post('/testing', 'DragonpayController@test')->name('form.test');
