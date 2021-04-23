
@extends('layouts.form')   
@section('body')
  <div class="container">
    <div class="frame">
      <div class="nav">
        <ul class"links">
          <li class="signin-active"><a class="btn">Create Midtrans Payment</a></li>
        </ul>
      </div>
      <div ng-app ng-init="checked = false">
        <form class="form-signin" name="form" action="{{ route('form1.submit') }}" method="POST">
          {{ csrf_field() }}
          <label for="username">Name</label>
          <input class="form-styling" type="text" id="name" name="name" required/>
          <label for="username">Email</label>
          <input class="form-styling" type="email" id="email" name="email" required/>
          <label for="password">Phone</label>
          <input class="form-styling" type="number" id="phone" name="phone" rows="3" required/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
          <div class="btn-animate">
              <button type="submit" value="submit" class="btn-signin">Submit</button>
          </div>
        </form>
    </div>
  </div>
@endsection
