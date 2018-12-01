<?php
        unset($_COOKIE["user_logged"]);
	setcookie('user_logged', null, -1, '/');
        unset($_COOKIE["Admin"]);
	setcookie('Admin', null, -1, '/');


        session_start();
        $_SESSION['error_message'] = "You have been logged out.";
        header("Location: index.php");
        die();
?>
