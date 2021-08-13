<!DOCTYPE html>
<html>
<head>
    <title>{{config('app.name')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/form.css')}}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg mb-10" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="{{route('show.food')}}">Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item" >
                        <a class="nav-link" href="{{ route('signout')}}" >Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

<h2> Booking Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

<div class="container">
  <form action="{{route('form.create')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="row">
    <div class="col-25">
      <label for="name">Full Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Your email..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="phone">Phone</label>
    </div>
    <div class="col-75">
      <input type="text" id="phone" name="phone" placeholder="Your phone..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="country">Country</label>
    </div>
    <div class="col-75">
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        <option value="bangladesh">Bangladesh</option>
        <option value="india">India</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="paymeny_method">Payment Method</label>
    </div>
  <div class="col-75">
      <select id="payment_method" name="payment_method">
        <option value="bkash">Bkash</option>
        <option value="rocket">Rocket</option>
        <option value="nogod">Nogod</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="txn_id">Txn ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="txn_id" name="txn_id" placeholder="Your txn_id..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="booking_period">Booking Period</label>
    </div>
    <div class="col-75">
    <select id="booking_period" name="booking_period">
        <option value="day">Day</option>
        <option value="night">Night</option>
        <option value="1 day">1 Day</option>
        <option value="2 day">2 Day</option>
        <option value="3 day">3 Day</option>
        <option value="4 day">4 Day</option>
        <option value="5 day">5 Day</option>
        <option value="6 day">6 Day</option>
        <option value="7 day">7 Day</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Subject</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" class="btn btn-primary mt-4" value="Submit">
  </div>
  </form>
  </div>

</body>
</html>

