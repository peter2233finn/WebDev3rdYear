<html>
<body>

<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$uname = $_POST["uname"];
$addss = $_POST["addss"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
//checks if passwords are the same
if (strcmp($pass1,$pass2) != 0)
{
	session_start();
	$_SESSION['error_message'] = "Passwords do not match. Please try again";
	header("Location: register.php");
	die();
}
//check if username already taken
$conn = mysqli_connect("localhost","bobbie","pug","webdev");
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT Username FROM USER where Username = '$uname'");
if ($result->num_rows > 0)
{
	session_start();
	$_SESSION['error_message'] = "A user with that username already exists. Try another";
	header("Location: register.php");
	die();
}
//validate email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	session_start();
	$_SESSION['error_message'] = "Please enter a valid email address.";
	header("Location: register.php");
	die();
}
//check if password sufficent length
if (strlen($pass1) < 8)
{
	session_start();
	$_SESSION['error_message'] = "Please enter a password greater than 8 charecters.";
	header("Location: register.php");
	die();
}
$result = $conn->query("insert into USER (Firstname,Lastname,Email,Address,Username,Password) values('$fname','$lname','$email','$addss','$uname','$pass1');");
$conn->close();
session_start();
$_SESSION['error_message'] = "Account created. Please login";
header("Location: login.php");
die();
?>





</body>
</html>
