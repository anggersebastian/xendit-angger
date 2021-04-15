<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> --}}
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="SB-Mid-client-RU8wIZ5asOLAJEKv"></script>
    <style>
      html, body * { box-sizing: border-box; font-family: 'Open Sans', sans-serif; }

      body {
        background:
          linear-gradient(
          rgba(246,247,249,0.8),
          rgba(246,247,249,0.8)),
          url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/sky-clouds-cloudy-mountain.jpg) no-repeat center center fixed;
        background-size: cover;
      }

      .container {
        width: 100%;
        padding-top: 60px;
        padding-bottom: 100px;
      }

      .frame {
        height: 575px;
        width: 430px;
        background:
          linear-gradient(
          rgba(35,43,85,0.75),
          rgba(35,43,85,0.95)),
          url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/clouds-cloudy-forest-mountain.jpg) no-repeat center center;
        background-size: cover;
        margin-left: auto;
        margin-right: auto;
        border-top: solid 1px rgba(255,255,255,.5);
        border-radius: 5px;
        box-shadow: 0px 2px 7px rgba(0,0,0,0.2);
        overflow: hidden;
        transition: all .5s ease;
      }

      .frame-long {
        height: 615px;
      }

      .frame-short {
        height: 400px;
        margin-top: 50px;
        box-shadow: 0px 2px 7px rgba(0,0,0,0.1);
      }

      .nav {
        width: 100%;
        height: 100px;
        padding-top: 40px;
        opacity: 1;
        transition: all .5s ease;
      }

      .nav-up {
        transform: translateY(-100px);
        opacity: 0;
      }

      li {
        padding-left: 10px;
        font-size: 18px;
        display: inline;
        text-align: left;
        text-transform: uppercase;
        padding-right: 10px;
        color: #ffffff;
      }

      .signin-active a {
        padding-bottom: 10px;
        color: #ffffff;
        text-decoration: none;
        border-bottom: solid 2px #1059FF;
        transition: all .25s ease;
        cursor: pointer;
      }

      .signin-inactive a {
        padding-bottom: 0;
        color: rgba(255,255,255,.3);
        text-decoration: none;
        border-bottom: none;
        cursor: pointer;
      }

      .signup-active a {
        cursor: pointer;
        color: #ffffff;
        text-decoration: none;
        border-bottom: solid 2px #1059FF;
        padding-bottom: 10px;
      }

      .signup-inactive a {
        cursor: pointer;
        color: rgba(255,255,255,.3);
        text-decoration: none;
        transition: all .25s ease;
      }

      .form-signin {
        width: 430px;
        height: 375px;
        font-size: 16px;
        font-weight: 300;
        padding-left: 37px;
        padding-right: 37px;
        padding-top: 55px;
        transition: opacity .5s ease, transform .5s ease;
      }

      .form-signin-left {
        transform: translateX(-400px);
        opacity: .0;
      }

      .form-signup {
        width: 430px;
        height: 375px;
        font-size: 16px;
        font-weight: 300;
        padding-left: 37px;
        padding-right: 37px;
        padding-top: 55px;
        position: relative;
        top: -375px;
        left: 400px;
        opacity: 0;
        transition: all .5s ease;
      }

      .form-signup-left {
        transform: translateX(-399px);
        opacity: 1;
      }

      .form-signup-down {
        top: 0px;
        opacity: 0;
      }

      .success {
        width: 80%;
        height: 150px;
        text-align: center;
        position: relative;
        top: -890px;
        left: 450px;
        opacity: .0;
        transition: all .8s .4s ease;
      }

      .success-left {
        transform: translateX(-406px);
        opacity: 1;
      }

      .successtext {
        color: #ffffff;
        font-size: 16px;
        font-weight: 300;
        margin-top: -35px;
        padding-left: 37px;
        padding-right: 37px;
      }

      #check path {
          stroke: #ffffff;
          stroke-linecap:round;
          stroke-linejoin:round;
          stroke-width: .85px;
          stroke-dasharray: 60px 300px;
          stroke-dashoffset: -166px;
          fill: rgba(255,255,255,.0);
          transition: stroke-dashoffset 2s ease .5s, fill 1.5s ease 1.0s;
      }

      #check.checked path {
          stroke-dashoffset: 33px;
          fill: rgba(255,255,255,.03);
      }

      .form-signin input, .form-signup input {
        color: #ffffff;
        font-size: 13px;
      }

      .form-styling {
        width: 100%;
        height: 35px;
        padding-left: 15px;
        border: none;
        border-radius: 20px;
        margin-bottom: 20px;
        background: rgba(255,255,255,.2);
      }

      label {
        font-weight: 400;
        text-transform: uppercase;
        font-size: 13px;
        padding-left: 15px;
        padding-bottom: 10px;
        color: rgba(255,255,255,.7);
        display: block;
      }

      :focus {outline: none;
      }

      .form-signin input:focus, textarea:focus, .form-signup input:focus, textarea:focus {
          background: rgba(255,255,255,.3);
          border: none; 
          padding-right: 40px;
          transition: background .5s ease;
      }

      [type="checkbox"]:not(:checked),
      [type="checkbox"]:checked {
        position: absolute;
        display: none;
      }

      [type="checkbox"]:not(:checked) + label,
      [type="checkbox"]:checked + label {
        position: relative;
        padding-left: 85px;
        padding-top: 2px;
        cursor: pointer;
        margin-top: 8px;
      }

      [type="checkbox"]:not(:checked) + label:before,
      [type="checkbox"]:checked + label:before,
      [type="checkbox"]:not(:checked) + label:after,
      [type="checkbox"]:checked + label:after {
        content: '';
        position: absolute;
      }

      [type="checkbox"]:not(:checked) + label:before,
      [type="checkbox"]:checked + label:before {
        width: 65px; 
        height: 30px;
        background: rgba(255,255,255,.2);
        border-radius: 15px;
        left: 0; 
        top: -3px;
        transition: all .2s ease;
      }

      [type="checkbox"]:not(:checked) + label:after,
      [type="checkbox"]:checked + label:after {
        width: 10px; 
        height: 10px;
        background: rgba(255,255,255,.7);
        border-radius: 50%;
        top: 7px; 
        left: 10px;
        transition: all .2s ease;
      }

      /* on checked */
      [type="checkbox"]:checked + label:before {
        background: #0F4FE6; 
      }

      [type="checkbox"]:checked + label:after {
        background: #ffffff;
        top: 7px; 
        left: 45px;
      }

      [type="checkbox"]:checked + label .ui,
      [type="checkbox"]:not(:checked) + label .ui:before,
      [type="checkbox"]:checked + label .ui:after {
        position: absolute;
        left: 6px;
        width: 65px;
        border-radius: 15px;
        font-size: 14px;
        font-weight: bold;
        line-height: 22px;
        transition: all .2s ease;
      }

      [type="checkbox"]:not(:checked) + label .ui:before {
        content: "no";
        left: 32px;
        color: rgba(255,255,255,.7);
      }

      [type="checkbox"]:checked + label .ui:after {
        content: "yes";
        color: #ffffff;
      }

      [type="checkbox"]:focus + label:before {
        box-sizing: border-box;
        margin-top: -1px;
      }

      .btn-signup {
        float: left;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 13px;
        text-align: center;
        color: #ffffff;
        padding-top: 8px;
        width: 100%;
        height: 35px;
        border: none;
        border-radius: 20px;
        margin-top: 23px;
        background-color: #1059FF;
      }

      .btn-signin {
        float: left;
        padding-top: 2px;
        width: 100%;
        height: 35px;
        border: none;
        border-radius: 20px;
        margin-top: -8px;
        color: white;
        background-color: #1059FF;
      }

      .btn-animate {
        float: left;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 13px;
        text-align: center;
        color: rgba(255,255,255, 1);
        padding-top: 8px;
        width: 100%;
        height: 35px;
        border: none;
        border-radius: 20px;
        margin-top: 23px;
        background-color: rgba(16,89,255, 1);
        left: 0px;
        top: 0px;
        transition: all .5s ease, top .5s ease .5s, height .5s ease .5s, background-color .5s ease .75s; 
      }

      .btn-animate-grow {
        width: 130%;
        height: 625px;
        position: relative;
        left: -55px;
        top: -420px;
        color: rgba(255,255,255,0);
        background-color: rgba(255,255,255,1);
      }

      .btn-signup:hover, .btn-signin:hover {
          cursor: pointer; 
          background-color: #0F4FE6;
          transition: background-color .5s; 
      }

      .forgot {
        height: 100px;
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
        padding-top: 24px;
        margin-top: -535px;
        border-top: solid 1px rgba(255,255,255,.3);
        transition: all 0.5s ease;
      }

      .forgot-left {
        transform: translateX(-400px);
        opacity: 0;
      }

      .forgot-fade {
        opacity: 0;
      }

      .forgot a {
        color: rgba(255,255,255,.3);
        font-weight: 400;
        font-size: 13px;
        text-decoration: none;
      }

      .welcome {
        width: 100%;
        height: 50px;
        position: relative;
        color: rgba(35,43,85,0.75);
        opacity: 0;
        transition: transform 1.5s ease .25s, opacity .1s ease 1s;
      }

      .welcome-left {
        transform: translateY(-780px);
        opacity: 1; 
      }

      .cover-photo {
        height: 150px;
        position: relative;
        left: 0px;  top: -900px;
        background:
          linear-gradient(
          rgba(35,43,85,0.75),
          rgba(35,43,85,0.95)),
          url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/landscape-nature-man-person.jpeg);
        background-size: cover;
        opacity: 0;
        transition: all 1.5s ease 0.55s;
      }

      .cover-photo-down {
        top: -575px;
        opacity: 1;
      }

      .profile-photo {
        height: 125px;
        width: 125px;
        position: relative;
        border-radius: 70px;
        left: 155px;
        top: -1000px;
        background: url(https://dl.dropboxusercontent.com/u/22006283/preview/codepen/nature-water-rocks-hiking.jpg);
        background-size: 100% 135%;
        background-position: 100% 100%;
        opacity: 0;
        transition: top 1.5s ease 0.35s, opacity .75s ease .5s;
        border: solid 3px #ffffff;
      }

      .profile-photo-down {
        top: -636px;
        opacity: 1;
      }

      h1 {
        color: #ffffff;
        font-size: 35px;
        font-weight: 300;
        text-align: center;
      }

      .btn-goback {
        position: relative;
        margin-right: auto;
        top: -400px;
        float: left;
        padding: 8px;
        width: 83%;
        margin-left: 37px;
        margin-right: 37px;
        height: 35px;
        border-radius: 20px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 13px;
        text-align: center;
        color: #1059FF;
        margin-top: -8px;
        border: solid 1px #1059FF;
        opacity: 0;
        transition: top 1.5s ease 0.35s, opacity .75s ease .5s;
      }

      .btn-goback-up {
        top: -1080px;
        opacity: 1;
      }

      a.btn-goback:hover {
          cursor: pointer; 
          background-color: #0F4FE6;
          transition: all .5s; 
          color: #ffffff;
      }

      /* refresh button styling */

      #refresh {
          position: fixed;
          bottom: 20px;
          right: 20px; 
          background-color: #ffffff;
          width: 50px;
          height: 50px;
          border-radius: 25px;
          box-shadow: 0px 2px 7px rgba(0,0,0,0.1);
          padding: 13px 0 0 13px;
      }

      .refreshicon {
          fill: #d3d3d3;
          transform: rotate(0deg);
          transition: fill .25s ease, transform .25s ease;
      }

      .refreshicon:hover {
        cursor: pointer;
        fill: #1059FF;
        transform: rotate(180deg);
      }
    </style>
    <title>Midtrans Payment</title>
  </head>
  <body>
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
            <input class="form-styling" type="text" id="name" name="name" value="<?= @$name; ?>" required/>
            <label for="username">Email</label>
            <input class="form-styling" type="email" id="email" name="email" value="<?= @$email; ?>" required/>
            <label for="password">Phone</label>
            <input class="form-styling" type="number" id="phone" name="phone" rows="3" value="<?= @$phone; ?>" required/>
            <input type="checkbox" id="checkbox"/>
            <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
            <div class="btn-animate">
                <button type="submit" value="submit" class="btn-signin">Submit</button>
            </div>
          </form>
      </div>
    </div>

    
    <script type="text/javascript">
        var payButton = document.getElementById('pay-button');
        // For example trigger on button clicked, or any time you need
        payButton.addEventListener('click', function () {
            snap.pay('1e8ab44c-ed4e-47e8-a510-2445821c72fd'); // Replace it with your transaction token
        });
    </script>
    
    {{-- < src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> --}}
  </body>
</html>
