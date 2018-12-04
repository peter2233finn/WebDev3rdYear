<?php
//checks if the user is a administrator or not
if (!isset($_COOKIE["Admin"]))
{
        session_start();
        $_SESSION['error_message'] = "You do not have permission to view this page.";
        header("Location: index.php");
        die();
}
?>
