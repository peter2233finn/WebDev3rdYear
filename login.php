<!doctype html>

<html>
<body background="linear-gradient(to bottom, #0033cc 0%, #0099ff 100%)">
<?php
include 'header.php';
?>

<body>
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
<h2>Login</h2>

<p>
<?php
session_start();
echo $_SESSION['error_message'];
unset($_SESSION['error_message']);
?>
<br>
<br>
</p>
  <form action="log.php" method="post" style="width:100%; text-align:center">

   <div class="container">
     <label for="uname"><b>Username</b></label>
     <input type="text" placeholder="Enter Username" name="uname" required>
     <br>

     <label for="pass"><b>Password</b></label>
     <input type="password" placeholder="Enter Password" name="pass" required>
     <br>
	<br>
     <button class="button" type="submit">Login</button>
     <br>
     <br>


     <a href="register.php" class="button">Register</a>
     <a href="#" class="button">Forgot Password</a>
    </div>
   <br>
   <br>
	<br>
	<br>
	<br>	
	<img style="width:10%;length:10%;margin-top=100px" src="movie_photos/venom.jpg">
	<img style="width:10%;length:10%;margin-top=100px" src="movie_photos/goosebumps.jpg">
	<img style="width:10%;length:10%;margin-top=100px" src="movie_photos/halloween.jpg">
	<img style="width:10%;length:10%;margin-top=100px" src="movie_photos/johnnyenglish.jpg">
	<img style="width:10%;length:10%;margin-top=100px" src="movie_photos/robin.jpg">

	<br>
	<br>
	<br>
	<img style="width:10%;length:10%;margin-top=100px" src="movie_photos/simplefavour.jpg">
	<img style="width:10%;length:10%;margin-top=100px" src="movie_photos/starisborn.jpg">
	<img style="width:10%;length:10%;margin-top=100px" src="movie_photos/smallfoot.jpg">
	<img style="width:10%;length:10%;margin-top=100px" src="movie_photos/hunter.jpg">
  </form>
 </center>
</div>
<?php
include 'footer.php'
?>
</body>

</html>

