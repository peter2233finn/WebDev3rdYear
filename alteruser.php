<?php
include 'SqlConnect.php';
include 'isadmin.php';
include 'header.php';


//checks if the button "delete" was pressed from users.php
if(isset($_POST["Delete"])) 
{

//creates a string to store message for completed task
	$toprint="The userID ";

//goes through each post iteration and puts them in a delete statment
	foreach ($_POST as $key => $value) 
	{
		$toprint .= $value ." ";
		$result = $conn->query("Delete from USER where USERID = " . $value);
	}

//returns user to users.php with the message that the users have been deleted.
        session_start();
        $_SESSION['error_message'] = $toprint . " have been deleted.";
        header("Location: users.php");
        die();
}

//checks if the button "movies" was pressed from users.php
if(isset($_POST["Movies"])) 
{

//creates table
	$toprint = "<p1><br><br><br><br><br><center>";
	foreach ($_POST as $key => $value) 
	{

//the varible "movies" will be passed but should not be included. (its last as its the submit button)
		if($value == "Movies")
		{
			break;
		}

//creates the table using s select statment for each varible
		$toprint .= "User: ".$value." movies:";
		$toprint .= "<table width=\"30%\" style=\"color: black;\" border=\"2\" bordercolor=\"black\"><br><br><tr><td>Movie time</td><td>Name</td><td>Ticket number</td></tr>";
		$result = $conn->query("select Time, MovieID, Name, WatchID from MOVIESWATCHED where USERID =  '".$value."'");
		while($r = $result->fetch_assoc()) 
		{
			$toprint .= "<tr><td width=\"1%\">" . $r["Time"] . "</td><td width=\"10%\">" . $r["Name"] . "</td><td width=\"1%\">" . $r["WatchID"] . "</td></tr>";
		}
		$toprint .= "</table><br><br>";

	}
	$toprint .= "</table></center></p1>";
	echo $toprint;
}
include 'footer.php';
?>
