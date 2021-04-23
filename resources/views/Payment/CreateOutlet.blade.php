@extends('layouts.form')
@section('body')
<div class="container">
  <div class="frame">
    <div class="nav">
      <ul class"links">
        <li class="signin-active"><a class="btn">Create Xendit Payment Outlet</a></li>
      </ul>
    </div>
    <div ng-app ng-init="checked = false">
      <form class="form-signin" name="form" action="{{ route('outlet.submit') }}" method="POST">
        {{ csrf_field() }}
        <label for="username">Name</label>
        <input class="form-styling" type="text" id="name" name="name" required/>
        <select class="form-styling" name="outlet" id="outlet" style="color:white;">
            <option id="ALFAMART" name="ALFAMART" value="ALFAMART">Alfamart</option>
            <option id="INDOMARET" name="INDOMARET" value="INDOMARET">Indomaret</option>
        </select>
        <input type="checkbox" id="checkbox"/>
        <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
        <div class="btn-animate">
          <button type="submit" value="submit" class="btn-signin">Pay IDR 250K with Xendit</button>
        </div>
      </form>
  </div>
</div>
@endsection

@section('js')
<script>
  $(function() {
    $(".btn").click(function() {
      $(".form-signin").toggleClass("form-signin-left");
      $(".form-signup").toggleClass("form-signup-left");
      $(".frame").toggleClass("frame-long");
      $(".signup-inactive").toggleClass("signup-active");
      $(".signin-active").toggleClass("signin-inactive");
      $(".forgot").toggleClass("forgot-left");   
      $(this).removeClass("idle").addClass("active");
    });
  });
  
  $(function() {
    $(".btn-signup").click(function() {
    $(".nav").toggleClass("nav-up");
    $(".form-signup-left").toggleClass("form-signup-down");
    $(".success").toggleClass("success-left"); 
    $(".frame").toggleClass("frame-short");
    });
  });
  
  $(function() {
    $(".btn-signin").click(function() {
    $(".btn-animate").toggleClass("btn-animate-grow");
    $(".welcome").toggleClass("welcome-left");
    $(".cover-photo").toggleClass("cover-photo-down");
    $(".frame").toggleClass("frame-short");
    $(".profile-photo").toggleClass("profile-photo-down");
    $(".btn-goback").toggleClass("btn-goback-up");
    $(".forgot").toggleClass("forgot-fade");
    });
  });
</script>    
@endsection


