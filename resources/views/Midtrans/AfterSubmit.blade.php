@extends('layouts.afterSubmit')
@section('body')
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
@endsection

@section('js')
<script type="text/javascript">
  var payButton = document.getElementById('pay-button');
  payButton.addEventListener('click', function () {
    snap.pay('{{ $token }}', {
      onSuccess: function(result){console.log('success');console.log(result);},
      onPending: function(result){console.log('pending');console.log(result);},
      onError: function(result){console.log('error');console.log(result);},
      onClose: function(){console.log('customer closed the popup without finishing the payment');}
    });
  });
</script>
@endsection

