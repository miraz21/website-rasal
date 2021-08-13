<head>
<link href="{{asset('assets/css/complains.css')}}" rel="stylesheet">
</head>
<body>

<h2>Complaints Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other.</p>

<div class="container">
<form action="{{route('complaints-point.user')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="row">
    <div class="col-15">
      <label for="problem_area">Problem Area</label>
    </div>
    <div class="col-40">
      <select id="problem_area" name="problem_area">
        <option value="service">Service</option>
        <option value="security">Security</option>
        <option value="restaurant">Restaurant</option>
        <option value="other">Other</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-15">
      <label for="description">Description</label>
    </div>
    <div class="col-40">
      <textarea id="description" name="description" placeholder="Write something.." style="height:100px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
