<!DOCTYPE html>
<html>
<head>
<link href="{{asset('assets/css/security.css')}}" rel="stylesheet">
</head>
<body>

<div class="header">
  <h1>Development Hostal Ltd</h1>
  <p>Resize the browser window to see the effect.</p>
</div>

<div class="topnav">
  <a href="{{route('home.index')}}">Home</a>
  <a href="{{route('service.page')}}">Service</a>
  <a href="{{route('bill.pay')}}">Cost</a>
  <a href="{{route('signout')}}" style="float:right">Signout</a>
  <a href="{{route('login')}}" style="float:right">Signin</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
    <h2>Security Gard</h2>
      <div class="container">
        <img src="{{asset('assets/image/security1.jpg')}}" alt="Trulli" width="635" height="350">
        <img src="{{asset('assets/image/ss2.jpg')}}" alt="Trulli" class="image-center" width="635" height="350">
    </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>

    <div class="card">
    <h2>CC TV</h2>
      <div class="container">
        <img src="{{asset('assets/image/cc1.jpg')}}" alt="Trulli" width="635" height="350">
        <img src="{{asset('assets/image/cc2.jpg')}}" alt="Trulli" class="image-center" width="635" height="350">
        </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
  
  <div class="card">
      <h2>Reception and Lock Card</h2>
      <div class="container">
        <img src="{{asset('assets/image/hs2.jpg')}}" alt="Trulli" class="image-center" width="635" height="350">
        <img src="{{asset('assets/image/images1.jpg')}}" alt="Trulli" class="image-center" width="635" height="350">
    </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>

<div class="footer">
  <a href="{{route('help.line')}}">Help Line</a>
  <a href="{{route('complaints-point.user')}}">Complaints Point</a>
  <a href="{{route('hot.line')}}">Hot-Line</a>
  <a href="{{route('office.rule')}}">Office Rule</a>
</div>
</div>

</body>
</html>