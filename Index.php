<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="Stylesheet.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>MSPHOTO</title>
	<meta charset="utf-8">
</head>

<style>

.mySlides {display:none; max-height: 500px;}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}

</style>

<body>
<!-- Nav bar -->
<?php
	include "Header.php";
?>
<!-- End of nav bar -->

<div style="text-align: center; font-size: 24px; ">
	<br>
	<?php
	
	$file = file_get_contents('./SideTekst/ForsideInfo.txt', true);
	
	echo $file;

	?>
</div>


<div class="w3-content w3-display-container" style="width:40%; height: screen.height - 5px; background-color: 
	white;">

    <!-- poster hvert billed der er i mappen[Billeder] -->
    <?php
    // Fortæller hvor hvad for en mappe den skal kigge i.
    $dirname = "Billeder/DiaShow/";

    // Enhver fil der lægger i den mappe som ender på .jpg, henter den.
    $images = glob($dirname."*.jpg");

    echo '<br>';

    // For hver .jpg den finder printer den det så ud i vores diashow.
    foreach ($images as $image) {
    	// Echo'er billedet
    	echo '<img class="mySlides" style="display: block; margin-left: auto; margin-right: auto;" src="' . $image . '" />';
	}
	?>
    <!-- End of for each loopet -->

    <!-- Knapperne der går til højre og venste -->
   	<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%;">
    <div class="w3-left w3-hover-text-khaki" style="color: red;"  onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" style="color: red; " onclick="plusDivs(1)">&#10095;</div>
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
<footer id="kontakt">
	<div>		
		<?php
		include "Footer.php";
		?>
	</div>
</footer>
<!-- End of Info bar -->
</body>
</html>

<script>
	// Dia show script
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
	// End of dia show script
</script>


<script type="text/javascript">
	 $(document).ready(function(){
	 	var knap = $(".dropbtn");
	 	var div = $(".dropdown-content");

	 	div.mouseenter(function(){
	 		div.show();
	 	})
	 	div.mouseleave(function(){
	 		div.hide();
	 	}) 

	 	knap.mouseenter(function(){
	 		div.show();
	 	})
	 	knap.mouseleave(function(){
	 		div.hide();
	 	})  
	});

	$("#forside").addClass("ative");



</script>