<?php
$conn = mysqli_connect("localhost","bobbie","pug","webdev");
if ($conn->connect_error)
{
        die("Connection failed: " . $conn->connect_error);
}
?>
