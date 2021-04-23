@extends('layouts.afterSubmit')
@section('body')
<div class="container" style="margin-top:5%;">
	<div class="row">
        <div class="jumbotron" style="box-shadow: 2px 2px 4px #000000;">
            <h2 class="text-center">YOUR ORDER HAS BEEN RECEIVED</h2>
            <h3 class="text-center">Thank you for your payment</h3>
            <h3 class="text-center">Please go to {{ $outlet }}</h3>
            <hr>
            <p class="text-center">Your code payment: <u style="color:blue;">{{ $payment_code }}</u></p>
            <p class="text-center">Total Order <u style="color:green;">IDR 250K</u></p>
            <hr>
            <h3 class="text-center"><u>Cara Membayar Melalui Gerai {{ $outlet }}</u></h3>
            <p class="text-center">
                1. Datang ke salah satu gerai {{ $outlet }} terdekat<br>
                2. Beritahu kasir untuk melakukan pembayaran ke Xendit<br>
                3. Tunjukkan kode pembayaran tagihan<br>
                4. Lakukan pembayaran sesuai dengan nominal tagihan<br>
                5. Terima tanda terima sebagai bukti pembayaran<br>
            </p>
        </div>
	</div>
</div>    
@endsection

