<html>
<body>

<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$uname = $_POST["uname"];
$addss = $_POST["addss"];
//check if username already taken
$conn = mysqli_connect("localhost","bobbie","pug","webdev");
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT Username, Userid FROM USER where Username = '$uname'");
while($row = $result->fetch_assoc()) 
{
	if($uname == $row["Username"])
	{
		if($row["Userid"] != $_COOKIE["user_logged"])
		{
			session_start();
			$_SESSION['error_message'] = "A user with that username already exists. Try another";
			header("Location: myaccount.php");
			die();
		}
	}
}
//validate email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	session_start();
	$_SESSION['error_message'] = "Please enter a valid email address.";
	header("Location: myaccount.php");
	die();
}


//check if password sufficent length
if($_POST["pass1"] != NULL)
{
	$pass1 = $_POST["pass1"];
	$pass2 = $_POST["pass2"];
	//checks if passwords are the same
	if (strcmp($pass1,$pass2) != 0)
	{
		session_start();
		$_SESSION['error_message'] = "Passwords do not match. Please try again";
		header("Location: myaccount.php");
		die();
	}

	if (strlen($pass1) < 8)
	{
		session_start();
		$_SESSION['error_message'] = "Please enter a password greater than 8 charecters.";
		header("Location: myaccount.php");
		die();
	}


	$result = $conn->query("UPDATE USER SET Firstname = '$fname', Lastname = '$lname', Email = '$email', Address = '$addss', Username = '$uname', Password = '$pass1' WHERE USERID = " . $_COOKIE['user_logged']);
}
else
{
	$result = $conn->query("UPDATE USER SET Firstname = '$fname', Lastname = '$lname', Email = '$email', Address = '$addss', Username = '$uname' WHERE USERID = " . $_COOKIE['user_logged']);
}
$conn->close();
session_start();
$_SESSION['error_message'] = "Account updated";
header("Location: index.php");
die();
?>





</body>
</html>
