<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <!-- Latest compiled and minified CSS -->

<div class="container" style="margin-top:5%;">
	<div class="row">
        <div class="jumbotron" style="box-shadow: 2px 2px 4px #000000;">
            <h2 class="text-center">YOUR ORDER HAS BEEN RECEIVED</h2>
            <h3 class="text-center">Thank you for your payment</h3>
            <h3 class="text-center">Please go to {{ $outlet }}</h3>
            <hr>
            <p class="text-center">Your order is: {{ $payment_code }}</p>
            <hr>
            <h3 class="text-center"><u>Cara Membayar Melalui Gerai Alfamart/Indomaret</u></h3>
            <p class="text-center">
                1. Datang ke salah satu gerai Alfamart/Indomaret terdekat<br>
                2. Beritahu kasir untuk melakukan pembayaran ke Xendit, atau nama bisnis Anda<br>
                3. Tunjukkan kode pembayaran tagihan<br>
                4. Lakukan pembayaran sesuai dengan nominal tagihan<br>
                5. Terima tanda terima sebagai bukti pembayaran<br>
            </p>
        </div>
	</div>
</div>
</body>
</html>