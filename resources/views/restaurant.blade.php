<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
  }
  
  body {
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
  }
  
  /* Header/Blog Title */
  .header {
    padding: 30px;
    text-align: center;
    background: white;
  }
  
  .header h1 {
    font-size: 50px;
  }
  
  /* Style the top navigation bar */
  .topnav {
    overflow: hidden;
    background-color: #333;
  }
  
  /* Style the topnav links */
  .topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 30px 16px;
    text-decoration: none;
  }
  
  /* Change color on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  
  /* Footer */
  .footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
  }
  
  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
      width: 100%;
      padding: 0;
    }
  }
  
  /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
  @media screen and (max-width: 400px) {
    .topnav a {
      float: none;
      width: 100%;
    }
  }
</style>
</head>
<body>

<div class="header">
  <h1>Development Hostal Ltd</h1>
  <p>Resize the browser window to see the effect.</p>
</div>

<div class="topnav">
  <a href="{{route('price.list')}}">Price List</a>
  <a href="{{route('buy.now')}}">Buy Now</a>
  <a href="{{route('signout')}}" style="float:right">Signout</a>
  <a href="{{ route('post.create') }}" style="float:right">Create Post</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Breakfast</h2>
      <h5>At Morning 07.00-09.00 am</h5>
      <div class="container">
        <img src="{{asset('assets/image/bf1.jpg')}}" alt="Trulli" class="image-center" width="425" height="250">
        <img src="{{asset('assets/image/bk2.jpg')}}" alt="Trulli" class="image-center" width="425" height="250">
        <img src="{{asset('assets/image/bk4.jpg')}}" alt="Trulli" class="image-center" width="425" height="250">
    </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>

    <div class="card">
      <h2>Lunch</h2>
      <h5>At Noon 01.00-02.30 pm</h5>
      <div class="container">
        <img src="{{asset('assets/image/ln1.jpg')}}" alt="Trulli" class="image-center" width="425" height="250">
        <img src="{{asset('assets/image/ln4.jpg')}}" alt="Trulli" class="image-center" width="425" height="250">
        <img src="{{asset('assets/image/ln2.jpg')}}" alt="Trulli" class="image-center" width="425" height="250">
    </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>

  <div class="card">
      <h2>Dinar</h2>
      <h5>At Night 08.00-10.00 pm</h5>
      <div class="container">
        <img src="{{asset('assets/image/ng1.jpg')}}" alt="Trulli" class="image-center" width="425" height="250">
        <img src="{{asset('assets/image/ng2.jpg')}}" alt="Trulli" class="image-center" width="425" height="250">
        <img src="{{asset('assets/image/ng4.jpg')}}" alt="Trulli" class="image-center" width="425" height="250">
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
