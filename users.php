<!doctype html>

<html>
<link rel="stylesheet" type="text/css" href="CSS.css">
<body>
<div style="background-color:#0066ff;">
<h1>
<?php
include 'header.php';
include 'SqlConnect.php';
if (!isset($_COOKIE["Admin"]))
{
        session_start();
        $_SESSION['error_message'] = "You do not have permission to view this page.";
        header("Location: index.php");
        die();
}
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
<center>
<?php
$result = $conn->query("SELECT USERID, Firstname, Lastname, Email, Address, Username, Admin  FROM USER;");

$display = "<br><table  border=\"2\" bordercolor=\"black\">";
$trClose = 0;
$i=0;
$display .= "<form method=\"POST\" action=\"alteruser.php\"><tr><th>Edit</th><th>User ID</th><th>Firstname</th><th>Lastname</th><th>Email Address</th><th>Address</td><th>Username</th><th>Administrator</th></td>";
while($row = $result->fetch_assoc())
{
	$i=$i+1;
	if($row["Admin"] == 1)
	{
		$display .= "<tr><td><input type=\"checkbox\" name=\"".$row["USERID"]."\" value=\"".$row["USERID"]."\"></td><td>".$row["USERID"]."</td><td>".$row["Firstname"]."</td><td>".$row["Lastname"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["Username"]."</td><td>Yes</td></tr>";
	}
	else
	{
		$display .= "<tr><td><input type=\"checkbox\" name=\"".$row["USERID"]."\" value=\"".$row["USERID"]."\"></td><td>".$row["USERID"]."</td><td>".$row["Firstname"]."</td><td>".$row["Lastname"]."</td><td>".$row["Email"]."</td><td>".$row["Address"]."</td><td>".$row["Username"]."</td><td>No</td></tr>";
	}
}
$display .= "</table>";
$display .= "<button value=\"Delete\" name=\"Delete\" class=\"button\" type=\"submit\">Delete</button>";
$display .= "<button value=\"Movies\" name=\"Movies\" class=\"button\" type=\"submit\">Movies</button>";
$display .= "</form>";
echo $display;
$conn->close();
include 'footer.php';
?>
</center>

</div>
</body>

</html>
