<!doctype html>

<html>
<link rel="stylesheet" type="text/css" href="CSS.css">
<?php
include 'header.php';
include 'loggedin.php';
?>

<div class = "background">
<head>
	<title>Luminous</title>
</head>
<body id="bodyId">

<center>

<br>
<br>
<br>
<br>
<br>
<div id="gobble">GG</div>
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
	$moviename=$row["Name"];
	$toprint  = '<h1>Book the movie ' . $row["Name"] . '  for ' . $time . '</h1>';
	$toprint .= '<img src="' . $row["Photo"] . '" alt="Italian Trulli">';
}

if ($day == 'weekend')
{
	$toprint .= '<br><br><div class="dropdown"><button class="dropbtn">Day</button><div class="dropdown-content">';
	$toprint .= '<a onclick="bookMovie(\''.$time.'\',\''.$_COOKIE["user_logged"].'\',\''.$moviename.'\',\''.$movieid.'\',\'6\')">Saturday</a>';
	$toprint .= '<a onclick="bookMovie(\''.$time.'\',\''.$_COOKIE["user_logged"].'\',\''.$moviename.'\',\''.$movieid.'\',\'7\')">Sunday</a>';
	$toprint .= '</div></div>';
}
else
{
	$toprint .= '<br><br><div class="dropdown"><button class="dropbtn">Day</button><div class="dropdown-content">';
	$toprint .= '<a onclick="bookMovie(\''.$time.'\',\''.$_COOKIE["user_logged"].'\',\''.$moviename.'\',\''.$movieid.'\',\'1\')">Monday</a>';
	$toprint .= '<a onclick="bookMovie(\''.$time.'\',\''.$_COOKIE["user_logged"].'\',\''.$moviename.'\',\''.$movieid.'\',\'2\')">Tuesday</a>';
	$toprint .= '<a onclick="bookMovie(\''.$time.'\',\''.$_COOKIE["user_logged"].'\',\''.$moviename.'\',\''.$movieid.'\',\'3\')">Wensday</a>';
	$toprint .= '<a onclick="bookMovie(\''.$time.'\',\''.$_COOKIE["user_logged"].'\',\''.$moviename.'\',\''.$movieid.'\',\'4\')">Thurday</a>';
	$toprint .= '<a onclick="bookMovie(\''.$time.'\',\''.$_COOKIE["user_logged"].'\',\''.$moviename.'\',\''.$movieid.'\',\'5\')">Friday</a>';
	$toprint .= '</div></div>';
}

echo $toprint;
?>
<br>
</div>
<?php
include 'footer.php'
?>
<script>
function bookMovie(time,userid,name,movieid,day)
{
	console.log(time);
	var form = '<form id="bookForm" action="booked.php" method="post"><input type="text" name="time" value="'+time+'"><input type="text" name="movieid" value="'+movieid+'"><input type="text" name="moviename" value="'+name+'"><input type="text" name="userid" value="' + userid + '"><input type="text" name="day" value="'+day+'"></form>';
	document.getElementById("bodyId").innerHTML=form;
	document.getElementById("bookForm").submit();
}
</script>

</center>

</body>

</html>
