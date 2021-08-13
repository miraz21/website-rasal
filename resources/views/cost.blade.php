<!DOCTYPE html>
<html lang="en">
<head>
<title>{{config('app.name')}}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{asset('assets/css/cost.css')}}" rel="stylesheet">
</head>
<body>

<div class="header">
  <h1>Development Hostal Ltd</h1>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

<div class="topnav">
  <a href="{{route('home.index')}}">Home</a>
  <a href="{{route('service.page')}}">Service</a>
  <a href="{{route('page.on')}}">Security</a>
  
  <a href="{{route('signout')}}" style="float:right">Signout</a>
  <a href="{{route('login')}}" style="float:right">Signin</a>
</div>

<div class="row">
  <div class="column">
    <h2>DAY (08.00 am-08.00pm)</h2>
    <h4>Single Room:</h4>
    <p>750/=</p>
    <h4>Double Room:</h4>
    <p>1000/=</p>
    <h4>VIP Room:</h4>
    <p>1500/=</p>
  </div>
  
  <div class="column">
    <h2>NIGHT (06.00pm-08.00am)</h2>
    <h4>Single Room:</h4>
    <p>1000/=</p>
    <h4>Double Room:</h4>
    <p>1200/=</p>
    <h4>VIP Room:</h4>
    <p>2000/=</p>
  </div>
  
  <div class="column">
    <h2>Full Day (Day+Night)</h2>
    <h4>Single Room:</h4>
    <p>1500/=</p>
    <h4>Double Room:</h4>
    <p>2000/=</p>
    <h4>VIP Room:</h4>
    <p>2500/=</p>
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