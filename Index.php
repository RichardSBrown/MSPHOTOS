<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php' ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="Stylesheet.css">
	<title>MSPHOTO</title>
</head>

<style>

.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}


</style>



<body id="FrontBody">
	<div style="padding-bottom: 5%;">
	</div>
<!-- Nav bar -->
<div id="FrontNavBar">
	<center><ul id = "FrontNavBar">
		<li><a class="ative" href=""> FORSIDE </a></li>	
		<li><a href=""> GRAVID </a></li>	
		<li><a href=""> BØRN / FAMILIE </a></li>	
		<li><a href=""> BRYLLUP </a></li>
		<li><a href=""> MODE </a></li>	
		<li style="float: ;"><a href=""> ANDET </a></li>
	</ul></center>
</div>
<!-- End of nav bar -->



<!-- Billed slideshow body -->
<!--<div id="MiddleScreenText" class="w3-content w3-display-container" >

	<img class="mySlides" src="Billeder/Test.jpg">
	<img class="mySlides" src="img_fjords.jpg">
	<img class="mySlides" src="img_lights.jpg">
	<img class="mySlides" src="img_mountains.jpg">
	<img class="mySlides" src="img_forest.jpg">

	<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
	<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
		
	<div class="w3-center w3-display-bottommiddle" style="width:100%">
	
	<span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>

</div> -->
</div>

<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="Billeder/Test.jpg" style="width:100%">
  <img class="mySlides" src="Billeder/Test.jpg" style="width:100%">
  <img class="mySlides" src="Billeder/Test.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>
<!-- End of slideshow body -->

<!-- Info bar -->
<div>
	i think there is some text here, not sure tho.
</div>
<!-- End of Info bar -->
</body>
</html>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>