<!DOCTYPE html>
<html lang="en">
<head>
<title>{{config('app.name')}}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{asset('assets/css/service.css')}}" rel="stylesheet">
</head>
<body>

<div class="header">
  <h1>Development Hostal Ltd</h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

<div class="topnav">
  <a href="{{route('home.index')}}">Home</a>
  <a href="{{route('page.on')}}">Security</a>
  <a href="{{route('bill.pay')}}">Cost</a>
  
  <a href="{{route('signout')}}" style="float:right">Signout</a>
  <a href="{{route('login')}}" style="float:right">Signin</a>
</div>

<div class="row">
  <div class="column">
    <h2>Online Booking Services</h2>
    <div class="container">
        <img src="{{asset('assets/image/tbk.jpg')}}" alt="Trulli" class="image-center" width="425" height="300">
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
  
  <div class="column">
    <h2>Online Emergency Treatment</h2>
    <div class="container">
        <img src="{{asset('assets/image/tds.jpg')}}" alt="Trulli" class="image-center" width="425" height="300">
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
  
  <div class="column">
    <h2>Restaurant Arrangements</h2>
    <div class="container">
        <img src="{{asset('assets/image/ln3.jpg')}}" alt="Trulli" class="image-center" width="425" height="300">
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
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