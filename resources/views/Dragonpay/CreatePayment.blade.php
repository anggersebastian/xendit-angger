<!DOCTYPE html>
<html>
<head>
  <style>
  label {width: 130px; float: left;}
  input {width: 250px;}
  </style>
</head>
<body>

  <?php if (!empty($errors)): ?>
  <div class="errors">
    <div class="error">
    
    </div>
  </div>
  <?php endif; ?>
  <div class="form">
    <form action="{{ route('form.submit') }}" method="POST">
    {{ csrf_field() }}
     @foreach ($fields as $key)
         
     
    <div class="input">
      <span class="label"><label for="<?php echo $key; ?>">
        <?php echo $value['label']; ?>:</label></span>
      <input type="<?php echo $value['type']; ?>"
        <?php echo implode(' ', $value['attributes']); ?>
        name="<?php echo $key; ?>" value="<?php echo $parameters[$key]; ?>">
    </div>
    
      <input type="submit" name="submit" value="Pay Now">
      @endforeach
    </form>
  </div>
</body>
</html>