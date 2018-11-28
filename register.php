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
<h2>Create Account
<br>
<br>
<?php
include 'header.php';
session_start();
echo $_SESSION['error_message'];
unset($_SESSION['error_message']);
?>
</h2>



<table style="width:80%">
  <form action="reg.php" method="post" style="width:100%; text-align:center">
   <div class="container">

   <tr>
     <th><label for="fname"><b>Firstname</b></label></th>
     <th><input type="text" placeholder="Enter firstname" name="fname" required></th>
   </tr>

    <br>
    <br>


   <tr>
     <th><label for="lname"><b>Lastname</b></label></th>
     <th><input type="text" placeholder="Enter lastname" name="lname" required></th>
   </tr>
    <br>
    <br>


   <tr>
     <th><label for="email"><b>Email Address</b></label></th>
     <th><input type="text" placeholder="Enter email" name="email" required></th>
   </tr>
    <br>
    <br>

   <tr>
     <th><label for="uname"><b>Username</b></label></th>
     <th><input type="text" placeholder="Enter Username" name="uname" required></th>
   </tr>
    <br>
    <br>
   <tr>
     <th><label for="addss"><b>Address</b></label></th>
     <th><input type="text" placeholder="Address" name="addss" required></th>
   </tr>

   <tr>
     <th><label for="pass1"><b>Password</b></label></th>
     <th><input type="password" placeholder="Enter password" name="pass1" required></th>
   </tr>
    <br>
    <br>

   <tr>
     <th><label for="pass2"><b>Confirm Password</b></label></th>
     <th><input type="password" placeholder="Confirm password" name="pass2" required></th>
   </tr>
    <br>
    <br>
</table>
        
     <button href="register.php" class="button" type="submit">Register</button>
     <br>
     <br>

    </div>
   <br>
   <br>

  </form>
 </center>
</div>
<div class="footer"><p>Contact us<br><br>Got a question?</p>
</body>

</html>


