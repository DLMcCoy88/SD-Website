<!DOCTYPE html>
<html>
<head>
	<title>Fire Detection System Hub</title>
	<link rel="stylesheet" type="text/css" href="css/layout.css">

</head>
<body>
	<h1 id="title"> Fire Detection System Hub </h1>

	<header>
		<div class = "row">
		<ul class = "main-nav">
			<li class = "active"><a href="layout.php"> LAYOUT </a></li>
			<li><a href="about.php"> ABOUT </a></li>
			<li><a href="readings.php"> READINGS </a></li>
			<li><a href="employee info.php"> EMPOYEE INFO </a></li>


		</ul> 

		</div> 
	<div class = "Layout"> Layout </div>

	</header>
		<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
		<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
		<p><img id="output" width="700" length = "350" /></p>


</html>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
