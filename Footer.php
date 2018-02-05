<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Stylesheet.css">
</head>
<footer class="kontakt">
	<?php
	
	$file = file_get_contents('./KontaktInfo.txt', true);
	
	echo $file;

	?>


</footer>
</html>