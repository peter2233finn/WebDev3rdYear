<!doctype html>

<html>
<link rel="stylesheet" type="text/css" href="CSS.css">
<body>
<div style="background-color:#0066ff;">
<h1>
<?php
include 'header.php';
?>
</h1>

<head>
	<title>Luminous</title>
</head>
<br>
<center><h1>
<?php
session_start();
echo $_SESSION['error_message'];
unset($_SESSION['error_message']);
?>
</h1></center>

<?php
$conn = mysqli_connect("localhost","bobbie","pug","webdev");
if ($conn->connect_error)
{
        die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT MOVIEID, Age, Runtime, Name, Genre, Photo, Discription FROM MOVIES where kids = false");

$display = "<table>";
$trClose = 0;
$i=0;
while($row = $result->fetch_assoc()) 
{
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
	$display .= "<td class=\"movielist\" height=\"1200\" style=\"vertical-align: top;\">";
	$display .= "<div class = \"left1\">";
	$display .= "<img style=\"width:80%;margin-top:90px\" src=\"" . $row["Photo"] . "\">";
	$display .= "<p><b>" . $row["Name"] . " - Rating: " . $row["Age"];
	$display .= "<br><br><br>Run Time: " . $row["Runtime"] . "</b><br><br>";
	$display .= "<br>" . $row["Discription"] . "</p><br><br><br>";

	//Adds time to the thing
	$times = $conn->query("select TIME from SHOWTIMES where MOVIEID = '" . $row["MOVIEID"] ."' and DAYTYPE = 'w'");
	$v=0;

	//writing the movie times
	$display .= "<table><tr><td>Weekdays</td><td>Weekends</td></tr><tr><td><br><br>";
	while($r = $times->fetch_assoc())
	{
		if($v!=0)
		{
			$display .= "<br><br><br>";
		}
		$display .= "<a button class=\"button\" onclick=\"bookMovie('" . $r["TIME"] . "','" . $row["MOVIEID"] . "','". "weekday')\">" . $r["TIME"] ."</a></button>";
		$v+=1;
	}

	$times = $conn->query("select TIME from SHOWTIMES where MOVIEID = '" . $row["MOVIEID"] ."' and DAYTYPE = 'e'");
	$v=0;
	$display .= "</td><td>";
	while($r = $times->fetch_assoc()) 
	{
		if($v!=0)
		{
			$display .= "<br><br><br>";
		}

		$display .= "<a button class=\"button\" onclick=\"bookMovie('" . $r["TIME"] . "','" . $row["MOVIEID"] . "','" . "weekend')\">" . $r["TIME"] ."</a></button>";
		$v+=1;
	}
	$display .= "</td></tr></table></div></td>";
	$i+=1;

}
$display .= "</table>";

echo $display;
$conn->close();
include 'footer.php'
?>

<script>
function bookMovie(time,movieid,day)
{
	var form = '<form id="bookForm" action="bookmovie.php"	method="post">  <input type="text" name="movieid" value="'+movieid+'"><input type="text" name="movietime" value="'+time+'"><input type="text" name="daytype" value="' + day + '"></form>';
	document.getElementById("bodyId").innerHTML=form;
	document.getElementById("bookForm").submit();
}
</script>
</div>
</body>

</html>
