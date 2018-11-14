<html>
<body>

<?php
$uname = $_POST["uname"];
$pass = $_POST["pass"];
$conn = mysqli_connect("localhost","bobbie","pug","webdev");

if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT Username FROM USER where Username = '$uname' and Password = '$pass'");
if ($result->num_rows == 0)
{
        session_start();
	$_SESSION['error_message'] = "Login failed. Try again.";log.php
	header("Location: login.php");
        die();
}

else
{
	session_start();
	$_SESSION['error_message'] = "You are logged in";
	header("Location: login.php");
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
