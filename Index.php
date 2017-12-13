<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="Stylesheet.css">
	<title>MSPHOTO</title>
	<meta charset="utf-8">
</head>

<style>

.mySlides {display:none; max-height: 500px;}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}

</style>



<body id="FrontBody">
	<div style="padding-bottom: 5%;">
	</div>
<!-- Nav bar -->
<div id="FrontNavBar">
	<center>
		<ul id = "FrontNavBar">
		<li><a class="ative" href=""> FORSIDE </a></li>	
		<li><a href=""> GRAVID </a></li>	
		<li><a href=""> BØRN / FAMILIE </a></li>	
		<li><a href=""> BRYLLUP </a></li>
		<li><a href=""> MODE </a></li>	
		<li style="float: ;"><a href=""> ANDET </a></li>
	</ul>
	</center>
</div>
<!-- End of nav bar -->

<div class="w3-content w3-display-container" style="max-width:800px; background-color: gray;">

    <!-- poster hvert billed der er i mappen[Billeder] -->
    <?php
    // Fortæller hvor hvad for en mappe den skal kigge i.
    $dirname = "Billeder/";

    // Enhver fil der lægger i den mappe som ender på .jpg, henter den.
    $images = glob($dirname."*.jpg");

    // For hver .jpg den finder printer den det så ud i vores diashow.
    foreach ($images as $image) {
    	// Echo'er billedet
    	echo '<img class="mySlides" style="width:100%" src="' . $image . '" />';
	}
	?>
    <!-- End of for each loopet -->

    <!-- Knapperne der går til højre og venste -->
   	<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%;">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <!-- End of knapperne -->

    <?php
    $count = 0;
    foreach ($images as $image) {
    	// Count skal bruges til at vise hvad for et billed brugeren er på.
    	$count++;

    	// Echo Bublerne i bunden af billedet for at viser hvad for et billed vi er på.
    	echo '<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv('. $count .')"></span>';

    }
    ?>
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