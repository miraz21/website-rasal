<!DOCTYPE html>
<html>
<head>
<title>{{config('app.name')}}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{asset('assets/css/food.css')}}" rel="stylesheet">
</head>
<body>
<h2> Food Collect Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
  <form action="{{route('buy.now')}}" method="post" enctype="multipart/form-data">
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
      <label for="room_no">Room No</label>
    </div>
    <div class="col-75">
      <input type="text" id="room_no" name="room_no" placeholder="Your room no..">
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
      <label for="eat_time">Eat Time</label>
    </div>
    <div class="col-75">
    <select id="eat_time" name="eat_time">
        <option value="breakfast">Breakfast</option>
        <option value="lunch">Lunch</option>
        <option value="dinar">Dinar</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="description">Description</label>
    </div>
    <div class="col-75">
      <textarea id="description" name="description" placeholder="Write something.." style="height:100px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>