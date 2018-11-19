<!doctype html>

<html>
<body background="linear-gradient(to bottom, #0033cc 0%, #0099ff 100%)">
<link rel="stylesheet" type="text/css" href="CSS.css">

<head>
<title>Luminous</title>
</head>
<div class = "background">

<br>
<br>
<br>
<br>

<center>
<h2>Update Account

<br>
<br>
<?php
include 'header.php';

if (!isset($_COOKIE['user_logged']))
{
        session_start();
        $_SESSION['error_message'] = "Login first";
        header("Location: login.php");
        die();
}
$conn = mysqli_connect("localhost","bobbie","pug","webdev");
$result = $conn->query('SELECT Userid, Firstname, Lastname, Email, Address, Username from USER where USERID = '. $_COOKIE['user_logged']);

$toprint = "";
while($row = $result->fetch_assoc())
{
	$toprint .=  '<table style="width:80%"><form action="reg.php" method="post" style="width:100%; text-align:center">';
	$toprint .=  '<div class="container"><tr><th><label for="fname"><b>Firstname</b></label></th><th><input type="text" value="' . $row['Firstname'] . '" placeholder="Enter firstname" name="fname" required></th>';
	$toprint .=  '</tr><br><br><tr><th><label for="lname"><b>Lastname</b></label></th><th><input type="text" value="' . $row['Lastname'] . '" placeholder="Enter lastname" name="lname" required></th>';
	$toprint .=  '</tr><br><br><tr><th><label for="email"><b>Email Address</b></label></th><th><input type="text"  value="' . $row['Email'] . '" placeholder="Enter email" name="email" required></th>';
	$toprint .=  '</tr><br><br><tr><th><label for="uname"><b>Username</b></label></th><th><input type="text"  value="' . $row['Username'] . '"placeholder="Enter Username" name="uname" required></th>';
	$toprint .=  '</tr><br><br><tr><th><label for="addss"><b>Address</b></label></th><th><input type="text"  value="' . $row['Address'] . '" placeholder="Address" name="addss" required></th>';
	$toprint .=  '</tr><tr><th><label for="pass1"><b>Password</b></label></th><th><input type="password" placeholder="New password" name="pass1" required></th>';
	$toprint .=  '</tr><br><br><tr><th><label for="pass2"><b>Confirm Password</b></label></th><th><input type="password" placeholder="Confirm password" name="pass2" required></th>';
	$toprint .=  '</tr><br><br></table><button href="register.php" class="button" type="submit">Update</button><br><br></div><br><br></form>';

}
echo $toprint;
?>
</h2>



 </center>
</div>
<div class="footer"><p>Contact us<br><br>Got a question?</p>
</body>

</html>

