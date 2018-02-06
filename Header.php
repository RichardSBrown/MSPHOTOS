<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Stylesheet.css">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<img style="max-height: 250px; max-width: 250px; display: block; margin-left: auto; margin-right: auto;" src="Logo1.png">

	<div id="FrontNavBar">
		<ul id = "FrontNavBar">
		<li><a id="forside" class="" href="Index.php"> FORSIDE </a></li>	
		<li><a id="gravid" class="" href="Gravid.php"> GRAVID </a></li>	
		<li><a id="børn" href="Børn.php"> BØRN / FAMILIE </a></li>	
		<li><a id="bryllup" href="Bryllup.php"> BRYLLUP </a></li>
		<li><a id="mode" href="Mode.php"> MODE </a></li>	
		<li><a class="dropbtn" href=""> ANDET </a></li>
			<div class="dropdown-content" >
				<li><a href="#">Kontakt</a></li>
				<li><a href="#">Prisliste</a></li>
				<li><a href="#">Facebook</a></li>
			</div>
	</ul>
</div>

</head>
<body>
<header>

</header>
</body>
</html>

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
</script>



<!-- 
Forside.
Gravid.
Børn/ familie
bryllup
mode

Andet som en dropdown
} indhold i dropdown.
	Kontakt
	Prisliste
	Facebook
}
-->