<?php
$conn = mysqli_connect("localhost","bobbie","pug","webdev");


function sqlinjectioncheck($str,$del)
{
	if (strpos($str,$del) !== false)
	{
	       session_start();
	        $_SESSION['error_message'] = "Nice try. Go away.";
	        header("Location: index.php");
	        die();
	}
}

if ($conn->connect_error)
{
        die("Connection failed: " . $conn->connect_error);
}
else
{
	foreach ($_POST as $key => $value) 
        {
		sqlinjectioncheck($value,'--');
		sqlinjectioncheck($value,"'");
		sqlinjectioncheck($value,'\;');
	}

}



?>
