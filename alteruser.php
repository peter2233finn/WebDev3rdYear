<?php
include 'SqlConnect.php';
include 'isadmin.php';

if(isset($_POST["Delete"])) 
{
	$toprint="The userID ";
	foreach ($_POST as $key => $value) 
	{
		$toprint .= $value ." ";
		$result = $conn->query("Delete from USER where USERID = " . $value);
	}

        session_start();
        $_SESSION['error_message'] = $toprint . " have been deleted.";
        header("Location: users.php");
        die();
}

if(isset($_POST["Movies"])) 
{
	$toprint = "";
	foreach ($_POST as $key => $value) 
	{
	$toprint .= "<tr><td>Movie time</td><td>Name</td><td>Ticket</td>"
		$result = $conn->query("select Time, MovieID, Name, WATCHID from MOVIESWATCHED where USERID =  " . $value);
		while($row = $result->fetch_assoc()) 
		{
			
		}

	}

}
include 'footer.php'
?>
