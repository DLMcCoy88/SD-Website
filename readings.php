<!DOCTYPE html>
<html>
<head>
	<title>Fire Detection System Hub</title>
	<link rel="stylesheet" type="text/css" href="css/readings.css">

</head>
<body>
	<h1 id="title"> Fire Detection System Hub </h1>
	<header>
		<div class = "row">
		<ul class = "main-nav">
			<li><a href="layout.php"> LAYOUT </a></li>
			<li><a href="about.php"> ABOUT </a></li>
			<li class ="active"><a href="readings.php"> READINGS </a></li>
			<li><a href="employee info.php"> EMPOYEE INFO </a></li>


		</ul> 

		</div> 

	</header>
	<div class = "Readings"> Readings </div>
	

</body>
</html>
<?php
echo nl2br (file_get_contents( "Sensor_Data.txt" )); // get the contents, and echo it out.
?>