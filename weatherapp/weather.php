<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Weather App</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVc0QVnN" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">

</head>
<body>

<nav class="navbar navbar-default" id="nav_bar">
<div class="container">
<div class="navbar-header">
<a href="" class="navbar-brand navbar-link weather">
<img src="images/logo.jpg" alt="" class="img-responsive" id="logo"><strong>Weather App</strong>
</a>
<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="navcol">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>

<div class="collapse navbar-collapse" id="navcol">
<ul class="nav navbar-nav navbar-right" id="nav_list">
<li><a href="current.php">Current</a></li>
<li><a href="forecast.php">Forecast</a></li>
<li><a href="http://www.openweathermap.org" target="_blank">Open Weather App</a></li>
</ul>
</div>
</div>
</nav>

<div class="row" id="headRow">
<div class="col-md-12" id="coltext">
<h2 class="text-center" id="colHeadText1"></h2>
<h2 class="text-center" id="colHeadText2"></h2> 
<ul class="list-inline" id="list_item">
<li id="list1"></li>
<li id="list2"></li>
<li id="list3"></li>
<li id="list4"></li>
</ul>
</div>
</div>

<div class="container" style="margin-bottom: 70px;">
<div class="row">
<div class="col-md-12">
<h2 class="text-center text-primary" style="margin-top: 40px;">Welcome To Shubhankar Weather App</h2>
<p class="text-center" id="welcome-paragraph">Shubhankar Weather App is a web-based application that
allows users to searh for current weather information as well as weather forecast of different cities
around the world. Users can search for weather information by City-Name. Shubhankar weather app uses the
openweathermap API which is found at www.openweathermap.org. 
</div>
</div>

<div class="row" id="rowDiv">
<div class="col-md-4" id="colDesc">
<div class="info-icon"><i class="fa fa-sun-o"></i></div>
<h3 class="text-center">Weather API</h3>
<p class="text-center">Use openweathermap API to get weather information of any city</p>
</div>

<div class="col-md-4" id="colDesc">
<div class="info-icon"><i class="fa fa-search"></i></div>
<h3 class="text-center">Search</h3>
<p class="text-center">Search for current weather information and weather forecast.</p>
</div>

<div class="col-md-4" id="colDesc">
<div class="info-icon"><i class="fa fa-chevron-circle-down"></i></div>
<h3 class="text-center">View Result</h3>
<p class="text-center">Get information about temperature, pressure, humidity etc.</p>
</div>
</div>

</div>

<div class="footer">
<div class="container">
<div class="row text-center" style="padding-top:30px;">
<p style="color:white;">Copyright &copy; Weather App </p>
</div> 
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript (6e2d98d776fcbf0bf28f25ecf65f18cd) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="typed.js" type="text/javascript"></script>

<script>
$(document).ready(function() {

setTimeout(function() {

var typed = new Typed("#colHeadText1", {

strings: ["The Most simplest weather app. It's simple."],
typeSpeed: 40
})
}, 0);

setTimeout(function() {
var typed = new Typed("#colHeadText2", {
strings: ["Get weather information of any city...."],
typeSpeed: 50
})
}, 2000);

setTimeout(function() {
var typed = new Typed("#list1", {
strings: ["Temperature"],
typeSpeed: 50
})
}, 4000);

setTimeout(function() {
var typed = new Typed("#list2", {
strings: ["Pressure"],
typeSpeed: 50
})
}, 6000);

setTimeout(function() {
var typed = new Typed("#list3", {
strings: ["Wind Speed"],
typeSpeed: 50
})
}, 8000);

setTimeout(function() {
var typed = new Typed("#list4", {
strings: ["Humidity"],
typeSpeed: 50
})
}, 10000);


});	
</script>



</body>
</html> 