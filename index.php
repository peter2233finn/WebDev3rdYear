<!doctype html>

<html>
<link rel="stylesheet" type="text/css" href="CSS.css">

<head>
	<title>Luminous</title>
</head>

<body>

	<div id="navbar">
	<a href="index.html">Home</a>
	<a href="kidsclub.html">Kids Club</a>
        <a href="login.html">Book ahead</a>
	</div>

<?php
$conn = mysqli_connect("localhost","bobbie","pug","webdev");
if ($conn->connect_error)
{
        die("Connection failed: " . $conn->connect_error);
}




$result = $conn->query("SELECT Age, Runtime, Name, Genre, Photo, Discription FROM MOVIES");

$display = "<table>";
$trClose = 0;
$i=0;
while($row = $result->fetch_assoc()) 
{
/*
$display .= "<div class = \"left1\">";
$display .= "<img style=\"width:80%;margin-top:90px\" src=\"" . $row["Photo"] . "\">";
$display .= "<p><b>" . $row["Name"] . " - Rating: " . $row["Age"];
$display .= "<br><br><br>Run Time: " . $row["Runtime"] . "</b><br><br>";
$display .= "<br>" . $row["Discription"] . "</p>";

//time, other time, other time.ect
$display .= "<br><br><br><a href=\"#\" class=\"button\">13:10</a><br>";				//add run times. You will need to add a nested loop to get sql queries from the other table


$display .= "</div>";
*/

	if($i%7 == 0)
	{
		if($trClose == 0)
		{
			$display .= "<tr>";
			$trClose = 1;
		}
		else
		{
			$display .= "</tr>";
			$trClose = 0;
		}
	}
	$display .= "<td>";
	$display .= "<div class = \"left1\">";
	$display .= "<img style=\"width:80%;margin-top:90px\" src=\"" . $row["Photo"] . "\">";
	$display .= "<p><b>" . $row["Name"] . " - Rating: " . $row["Age"];
	$display .= "<br><br><br>Run Time: " . $row["Runtime"] . "</b><br><br>";
	$display .= "<br>" . $row["Discription"] . "</p>";

	//time, other time, other time.ect
	$display .= "<br><br><br><a href=\"#\" class=\"button\">13:10</a><br>";				//add run times. You will need to add a nested loop to get sql queries from the other table
	$display .= "</div>";
	$display .= "</td>";

	$i+=1;

}
$display .= "</table>";



echo $display;
$conn->close();
?>

	<div class = "background"></div>
	<div class="footer"><p>Contact us<br><br>Got a question?</p>
    </div>
</body>

</html>
