<?php
if (!isset($_COOKIE['user_logged']))
{
        session_start();
        $_SESSION['error_message'] = "Login first";
        header("Location: login.php");
        die();
}
?>
