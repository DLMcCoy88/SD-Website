<!DOCTYPE html>                                            								<!--Identifies the type of textfile -->
<html>																					<!-- Starts the html -->
<head>																					<!-- Starts head of file -->
	<title>Fire Detection System Hub</title>                                            <!-- Title of webpage -->
	<link rel="stylesheet" type="text/css" href="css/about.css">                         <!-- Links the webpage to the corresponding 																							cascading style sheet -->

</head>																					<!-- Closes the head -->
<body>																					<!-- Starts the body of the webpage -->
	<h1 id="title"> Fire Detection System Hub </h1>										<!-- Title of the current page -->
	<header>
		<div class = "row">																<!--Creates classes for the list of links to 																						different sections of the webpage. Connects each 																					link to the corresponding webpage. "Active" is the 																					page that is currently open-->
		<ul class = "main-nav">
			<li><a href="layout.php"> LAYOUT </a></li>
			<li class = "active"> <a href="about.php"> ABOUT </a></li>
			<li><a href="readings.php"> READINGS </a></li> 
			<li><a href="employee info.php"> EMPOYEE INFO </a></li>


		</ul> 

		</div> 

	</header>
	<div class = "About"> About </div>													<!-- Labels the page. Identifies which tab the user 																					is currently in -->

	<div id = "system"> 
	<img src="Prototype.jpg">																<!-- Inserts an image -->
	</div>

	<div class = "Question"> WHO?</div>													<!-- Basic information about the system-->
	<div class = "Answer"> This system was developed by University of Maryland Eastern Shore seniors David Goslee, Dedrick McCoy and Israel Akinsoyinu. </div>
	<div class = "Question"> WHAT? </div>
	<div class = "Answer"> This is a fire detection system that notifies the building occupants and first responders of where a fire is in the building. </div>
	<div class = "Question"> HOW? </div>
	<div class = "Answer"> Fire is detected by carbon monoxide, temperature and ionization sensors. Occupants are notified via SMS and 911 is dialed, both done using a raspberry pi phone. </div>
	<div class = "Question"> WHERE? </div>
	<div class = "Answer"> This detector is intended for larger buildings with multiple floors and rooms. These buildings include, (but not limited to) schools, hospitals and corporate offices. Although it is meant for bigger establishments, this system can also be used for smaller buildings such as homes. </div>
	<div class = "Question"> WHY? </div>
	<div class = "Answer"> The objective of this system is to have multiple ways to detect a flame and have the ability to alert occupants and responders of exactly where in the building the flame is.  </div>
	<div class = "Question"> WHEN? </div>
	<div class = "Answer"> This system was developed, programmed and constructed in 2019 </div>

</body>
</html>