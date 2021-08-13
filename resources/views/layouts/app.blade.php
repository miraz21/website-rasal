<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>{{config('app.name')}}</title>

<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
@yield('content')

<div class="header">
  <h1>Development Hostal Ltd</h1>
  <p>Resize the browser window to see the effect.</p>
</div>

<div class="topnav">
  <a href="{{route('service.page')}}">Service</a>
  <a href="{{route('page.on')}}">Security</a>
  <a href="{{route('bill.pay')}}">Cost</a>
  <a href="{{route('signout')}}" style="float:right">Signout</a>
  <a href="{{route('login')}}" style="float:right">Signin</a>
  <a href="{{route('register-user')}}" style="float:right">Registration</a>
  
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Front Place</h2>
      <div class="container">
        <img src="{{asset('assets/image/bd7.jpeg')}}" alt="Trulli" width="870" height="350">
        </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>

    <div class="card">
      <h2>Back Place</h2>
      <div class="container">
        <img src="{{asset('assets/image/bd3.jpeg')}}" alt="Trulli" width="870" height="350">
        </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
 
  <div class="rightcolumn">
    <div class="card">
      <h2>About US</h2>
      <div class="container">
        <img src="{{asset('assets/image/web13.jpg')}}" alt="Trulli" width="225" height="200">
        </div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>

    <div class="card">
      <h3>Hostal Gallery</h3>
      <?php
      echo "Today is " . date("Y-m-d") . "<br>";
      ?>
        <div class="container">
        <img src="{{asset('assets/image/web8.jpg')}}" alt="Trulli" width="250" height="150">
        </div>
        <?php
      echo "Today is " . date("Y-m-d") . "<br>";
      ?>
        <div class="container">
        <img src="{{asset('assets/image/web2.jpg')}}" alt="Trulli" width="250" height="150">
        </div>
        <?php
      echo "Today is " . date("Y-m-d") . "<br>";
      ?>
        <div class="container">
        <img src="{{asset('assets/image/hr3.jpg')}}" alt="Trulli" width="250" height="150">
        </div>
    </div>

    <div class="card">
      <h3>Official Notice</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>

<div class="footer">
  <a href="{{route('help.line')}}">Help Line</a>
  <a href="{{route('complaints-point.user')}}">Complaints Point</a>
  <a href="{{route('hot.line')}}">Hot-Line</a>
  <a href="{{route('office.rule')}}">Office Rule</a>
</div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>