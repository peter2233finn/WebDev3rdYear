<html>
<body>

<?php
include 'SqlConnect.php';
$uname = $_POST["uname"];
$pass = $_POST["pass"];
$conn = mysqli_connect("localhost","bobbie","pug","webdev");
unset($_COOKIE["Admin"]);
setcookie('Admin', null, -1, '/');

$result = $conn->query("SELECT Username, Userid, Admin FROM USER where Username = '$uname' and Password = '$pass'");
if ($result->num_rows == 0)
{
        session_start();
	$_SESSION['error_message'] = "Login failed. Try again.";
	header("Location: login.php");
        die();
}

else
{
	session_start();
	$_SESSION['error_message'] = "You are logged in";

	while($row = $result->fetch_assoc()) 
	{
		setcookie('user_logged', $row['Userid'], time() + (86400 * 30), "/");

		if ($row['Admin'] == 1)
		{
			$_SESSION['error_message'] .= " with an administrator account.";
			setcookie('Admin', $row['Userid'], time() + (86400 * 30), "/");
		}
	}

	header("Location: index.php");
	die();
	$conn->close();
}

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}?>





</body>
</html>
