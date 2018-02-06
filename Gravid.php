<!DOCTYPE html>
<html>
<head>
	<title>Gravid</title>
	<link rel="stylesheet" type="text/css" href="Stylesheet.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<?php
		include "Header.php";
	?>

</head>
<body class="GravidSite">
	




</body>
<footer id="kontakt">
	<div>		
		<?php
		include "Footer.php";
		?>
	</div>
</footer>
</html>

<script type="text/javascript">


	function loadDoc() {
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	    	$('body').append(this.responseText);
	    	$("#PageText").load('/SideTekst/GravidInfo.txt');
	    	$("#gravid").addClass("ative");
	    	

	    	var dir = "Billeder/gravid/";
			var fileextension = ".jpg";
			$.ajax({
			    //This will retrieve the contents of the folder if the folder is configured as 'browsable'
			    url: dir,
			    success: function (data) {
			        //List all .png file names in the page
			        $(data).find("a:contains(" + fileextension + ")").each(function () {
			            var filename = this.href.replace(window.location.host, "").replace("http://", "");
			            $("body").append("<img src='" + dir + filename + "'>");

			        });
			    }
			});
		}
	  };
	  xhttp.open("GET", "Doc.txt", true);
	  xhttp.send();
	}

	loadDoc();



</script>