<!DOCTYPE html>
<html>
<head>
	<title>Fire Detection System Hub</title>
  <link rel="stylesheet" type ="text/css" href="css/layout.css">

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
	<br>
	<div class = "Floor"> Please select and upload your building layout </div>
<form method = "post" enctype = "multipart/form-data">
    <input type = "file" name = "image">
    <br>
    <input type = "submit" name = "submit" value = "submit">
</form>
<div class="bg-grid">
  <img src='Floor1.jpg' width ="1000" length ="500"/>
</div>
<div class="bg-grid">
  <img src='Floor2.jpg' width ="1000" length ="500"/>
</div>
<div class="bg-grid">
  <img src='Floor3.jpg' width ="1000" length ="500"/>
</div>

<?php
if(isset($_POST['submit']))
{
  if (getimagesize($_FILES['image']['tmp_name'])==FALSE) {
      echo "failed";
  }
  else{
      $name=addslashes($_FILES['image']['name']);
      $image=base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
      saveimage($name,$image);
  }
}

function saveimage($name, $image){
    $con = mysqli_connect("localhost", "root", "", "tutorial");
    $sql="insert into images(name, image) values('$name', '$image')";
    $query = mysqli_query($con, $sql);
    if ($query) {
      echo "";
    }
    else{
      echo "";
    }
}
display();

function display(){
    $con = mysqli_connect("localhost", "root", "", "tutorial");
    $sql = "select * from images";
    $query=mysqli_query($con,$sql);
    $num=mysqli_num_rows($query);
    for ($i=0; $i < $num; $i++){
      $result=mysqli_fetch_array($query);
      $img=$result['image'];
      echo '<img class ="img" src="data:image;base64, ' .$img.'';
    }

}

?>

</body>
</html>


