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
<form>
    <div>How many devices do you have?</div>
    <input type="number" name="num1"/>
    <div><br><input type="submit" value="Enter"></div><br>
</form>
<?php
$num1 = 0;
if (isset($_GET['num1'])) {
 
    $num1 = $_GET['num1'];
 
}

?>

<?php
echo "<form method = 'POST' action = 'layout.php?num1=$num1'>";
$rooms = array();
for ($i=1; $i<=$num1; $i++) {
    echo nl2br("Where is Node $i ?  \n");
    echo "<input type = 'text' name = 'room[]' class = 'class_name'/><br/>";
    echo '<div id="node'.$i.'">X</div>';
    echo nl2br(" \n");
}
echo "<input type = 'submit' value = 'SEND'/>";
echo "</form>";
?>
<?php
function location()
{
    $rooms = $_POST['room'];

  if (sizeof($rooms) > 0){  
    for($counter = 0; $counter < sizeof($rooms); $counter++)
    {
      echo "Node #".($counter + 1).": ".$rooms[$counter]."<br />";
    }}
}
if(isset($_POST['room']))
{
  location();
}

?>
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
    $con = mysqli_connect('us-cdbr-iron-east-02.cleardb.net', 'b9d264b004acd5', '65b3cf3c', 'heroku_553bb04cbc1909f');
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
    $con = mysqli_connect('us-cdbr-iron-east-02.cleardb.net', 'b9d264b004acd5', '65b3cf3c', 'heroku_553bb04cbc1909f');
    $sql = "select * from images";
    $query=mysqli_query($con,$sql);
    $num=mysqli_num_rows($query);
    for ($i=0; $i < $num; $i++){
      $result=mysqli_fetch_array($query);
      $img=$result['image'];
      echo '<img class ="img" src="data:image/jpeg;base64, '.$img.'"/>';
    }

}

?>
<script type="text/javascript">
var n1 = document.getElementById("node1");
var n2 = document.getElementById("node2");
var n3 = document.getElementById("node3");
var n4 = document.getElementById("node4");
var n5 = document.getElementById("node5");
var n6 = document.getElementById("node6");
var n7 = document.getElementById("node7");
var n8 = document.getElementById("node8");
var n9 = document.getElementById("node9");
var n10 = document.getElementById("node10");
var n11 = document.getElementById("node11");
var n12 = document.getElementById("node12");
var n13 = document.getElementById("node13");
var n14 = document.getElementById("node14");
var n15 = document.getElementById("node15");
var n16 = document.getElementById("node16");
var n17 = document.getElementById("node17");
var n18 = document.getElementById("node18");
var n19 = document.getElementById("node19");
var n20 = document.getElementById("node20");


var moving = false;

n1.addEventListener("mousedown", initialClick, false);
n2.addEventListener("mousedown", initialClick, false);
n3.addEventListener("mousedown", initialClick, false);
n4.addEventListener("mousedown", initialClick, false);
n5.addEventListener("mousedown", initialClick, false);
n6.addEventListener("mousedown", initialClick, false);
n7.addEventListener("mousedown", initialClick, false);
n8.addEventListener("mousedown", initialClick, false);
n9.addEventListener("mousedown", initialClick, false);
n10.addEventListener("mousedown", initialClick, false);
n11.addEventListener("mousedown", initialClick, false);
n12.addEventListener("mousedown", initialClick, false);
n13.addEventListener("mousedown", initialClick, false);
n14.addEventListener("mousedown", initialClick, false);
n15.addEventListener("mousedown", initialClick, false);
n16.addEventListener("mousedown", initialClick, false);
n17.addEventListener("mousedown", initialClick, false);
n18.addEventListener("mousedown", initialClick, false);
n19.addEventListener("mousedown", initialClick, false);
n20.addEventListener("mousedown", initialClick, false);





function move(e){

  var newX = e.clientX - 10;
  var newY = e.clientY - 10;

  image.style.left = newX + "px";
  image.style.top = newY + "px";

  
}

function initialClick(e) {

  if(moving){
    document.removeEventListener("mousemove", move);
    moving = !moving;
    return;
  }
  
  moving = !moving;
  image = this;

  document.addEventListener("mousemove", move, false);

}

</script>

</body>
</html>


