<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Payment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-RU8wIZ5asOLAJEKv"></script>
</head>
<body>
<div class="container" style="margin-top:5%;">
	<div class="row">
    <div class="jumbotron" style="box-shadow: 2px 2px 4px #000000;">
        <h2 class="text-center">Thanks For Submitting Info</h2>
        <h3 class="text-center">Total Invoice IDR 250K</h3>
        <hr>
        <p class="text-center">Name: {{ $name }}</p>
        <p class="text-center">Email: {{ $email }}</p>
        <p class="text-center">Phone: {{ $phone }}</p>
        <hr>
        <div class="text-center" style="text-align: center;">
          <button id="pay-button" class="btn btn-primary text-center">Pay Now</button>
        </div>
    </div>
	</div>
</div>

    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      // For example trigger on button clicked, or any time you need
      payButton.addEventListener('click', function () {
        // snap.pay('{{ $token }}'); // Replace it with your transaction token
        snap.pay('{{ $token }}', {
          onSuccess: function(result){console.log('success');console.log(result);},
          onPending: function(result){console.log('pending');console.log(result);},
          onError: function(result){console.log('error');console.log(result);},
          onClose: function(){console.log('customer closed the popup without finishing the payment');}
        });
      });

      // snap.pay('{{ $token }}', {
      // onSuccess: function(result){
      //   /* You may add your own implementation here */
      //   alert("payment success!"); console.log(result);
      // },
      // onPending: function(result){
      //   /* You may add your own implementation here */
      //   alert("wating your payment!"); console.log(result);
      // },
      // onError: function(result){
      //   /* You may add your own implementation here */
      //   alert("payment failed!"); console.log(result);
      // },
      // onClose: function(){
      //   /* You may add your own implementation here */
      //   alert('you closed the popup without finishing the payment');
      // }
    </script>
</body>
</html>
