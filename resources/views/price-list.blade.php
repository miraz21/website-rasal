<!DOCTYPE html>
<html>
<head>
<style>
    * {
  box-sizing: border-box;
}

body {
  margin: 0;
}
ul.a {
  list-style-type: circle;
}

ul.b {
  list-style-type: square;
}

ol.c {
  list-style-type: upper-roman;
}

ol.d {
  list-style-type: lower-alpha;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>


<div class="row">
  <div class="column">
  <h2>Breakfast </h2>
  <p>Item and Price Lists:</p>
<ul class="a">
  <li>Coffee-20tk</li>
  <li>Tea</li>
  <li>Coca Cola</li>
</ul>
  </div>
  
  <div class="column">
    <h2>Lunch</h2>
    <p>Item and Price Lists:</p>
<ul class="a">
  <li>Coffee-20tk</li>
  <li>Tea</li>
  <li>Coca Cola</li>
</ul>
  </div>
  
  <div class="column">
    <h2>Dinar</h2>
    <p>Item and Price Lists:</p>
<ul class="a">
  <li>Coffee-20tk</li>
  <li>Tea</li>
  <li>Coca Cola</li>
</ul>
  </div>
</div>


</body>
</html>