<!doctype html>

<html>
<link rel="stylesheet" type="text/css" href="CSS.css">

<head>
	<title>Luminous</title>
</head>
<body id="bodyId">

	<div id="navbar">
	<a href="index.html">Home</a>
	<a href="kidsclub.html">Kids Club</a>
        <a href="login.html">Book ahead</a>
	</div>
	<div class = "background">
	<center>

<br>
<br>
<br>
<br>
<br>
<h1>Book Movie</h1>


//select day for weekend or weekday
//

<h1></h1>


<?php
$day  = $_POST["daytype"];
$time = $_POST["movietime"];
$movieid = $_POST["movieid"];

$conn = mysqli_connect("localhost","bobbie","pug","webdev");
if ($conn->connect_error)
{
        die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT MOVIEID, Age, Runtime, Name, Genre, Photo, Discription FROM MOVIES where MOVIEID = $movieid");

$display = "<table>";
$trClose = 0;
$i=0;
$toprint = "";

while($row = $result->fetch_assoc()) 
{
	$toprint  = '<h1>Book the movie ' . $row["Name"] . '  for ' . $time . '</h1>';
	$toprint .= '<img src="' . $row["Photo"] . '" alt="Italian Trulli">';
}

if ($day == 'weekend')
{
	$toprint .= '<br><br><div class="dropdown"><button class="dropbtn">Dropdown</button><div class="dropdown-content"><a href="#">Saturday</a><a href="#">Sunday</a></div></div>';
}
else
{
	$toprint .= '<br><br><div class="dropdown"><button class="dropbtn">Dropdown</button><div class="dropdown-content"><a href="#">Monday</a>';
	$toprint .= '<a href="#">Tuesday</a><a href="#">Wensday</a><a href="#">Thursday</a><a href="#">Friday</a></div></div>';
}

echo $toprint;
?>


<br>


	</div>
	<div class="footer"><p>Contact us<br><br>Got a question?</p>
    </div>


	</center>

</body>

</html>
