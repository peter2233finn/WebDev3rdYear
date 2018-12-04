<html>
<body>

<?php
include 'header.php';
include 'SqlConnect.php';
$day = $_POST["day"];
$time = $_POST["time"];
$userid = $_POST["userid"];
$movieid = $_POST["movieid"];
$moviename = $_POST["moviename"];

//  find largest count for that particular booking and limit it to 4
$result = $conn->query("select COUNT(WATCHID) from MOVIESWATCHED where USERID = '" . $userid . "' and MOVIEID = '".$movieid."' and TIME ='".$time."'");
while($row = $result->fetch_assoc())
{
	$tickets = $row["COUNT(WATCHID)"];
}

//do not book if they have booked more than 4
if($tickets > 4)
{
        session_start();
        $_SESSION['error_message'] = "You are limited to 4 tickets per screening";
        header("Location: login.php");
        die();
}

//make ticket and display ticket number
$result = $conn->query("insert into MOVIESWATCHED (Time, Name,Day,USERID,MOVIEID) values('$time','$moviename','$day','$userid','$movieid');");
switch ($day){
	case 1:
		$dayname = "Monday";
		break;
	case 2:
		$dayname = "Tuesday";
		break;
	case 3:
		$dayname = "Wensday";
		break;
	case 4:
		$dayname = "Thursday";
		break;
	case 5:
		$dayname = "Friday";
		break;
	case 6:
		$dayname = "Saturday";
		break;
	case 7:
		$dayname = "Sunday";
		break;
}

//
if($result == 1)
{
	$result2 = $conn->query("SELECT MOVIEID, Age, Runtime, Name, Genre, Photo, Discription FROM MOVIES where MOVIEID = $movieid");
	$trClose = 0;
	$i=0;
	$toprint = "<center><br><br><br>";
	
	while($row = $result2->fetch_assoc()) 
	{
		$moviename=$row["Name"];
		$toprint .= '<h1>You have booked ' . $row["Name"] . '  for ' . $dayname . ' at ' . $time . "<br>Please pay at the desk, and you will be given your seat number(s).<br><br>";
		$toprint .= '<img src="' . $row["Photo"] . '" alt="Italian Trulli">';
	}

	$result2 = $conn->query("select MAX(WATCHID) from MOVIESWATCHED where USERID = " . $userid);
	while($row = $result2->fetch_assoc()) 
	{
		$toprint .= "<br><br>Your ticket number is: ". $row["MAX(WATCHID)"] . '</h1>';
	}
	echo $toprint . "<br><br><br></center>";
}
else
{
echo "GAGAGAGAGAGA";
}
include 'footer.php';
?>





</body>
</html>




