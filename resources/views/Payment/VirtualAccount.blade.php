<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Xendit Payment</title>
  </head>
  <body>
    <div id="container" class="container">
      <h1>Create Xendit Invoice</h1>
      <div id="body">  
        <form action="{{ route('form.submit') }}" method="POST">
          {{ csrf_field() }}
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">External ID</label>
            <input type="text" id="extId" name="extId" class="form-control" value="<?= @$extId; ?>" placeholder="ex. 2321"></p>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="payer_email" name="payer_email" placeholder="name@example.com" value="<?= @$payer_email; ?>">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="event seminar" value="<?= @$description; ?>"></textarea>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Amount</label>
            <input type="text" class="form-control" id="amount" name="amount" placeholder="200000" value="<?= @$amount; ?>">
          </div>
          <button type="submit" value="submit" class="btn btn-primary">Apply Invoice</button>
          {{-- <input type="submit" value="submit"> --}}
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  </body>
</html>
