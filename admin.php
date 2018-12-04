<!doctype html>

<html>
<body background="linear-gradient(to bottom, #0033cc 0%, #0099ff 100%)">
<link rel="stylesheet" type="text/css" href="CSS.css">
<?php
//check if the logged in user has admin privelages
include 'header.php';
if (!isset($_COOKIE["Admin"]))
{
        session_start();
        $_SESSION['error_message'] = "You do not have permission to view this page.";
        header("Location: index.php");
        die();
}
?>

<head>
<title>Luminous</title>
</head>
<div class = "background">

<br>
<br>
<br>
<br>

<center>
<h2>Add movie
<?php
//display error message stored in the session varible error_message
session_start();
echo $_SESSION['error_message'];
unset($_SESSION['error_message']);
?>
</h2>

<table style="width:80%">
  <form enctype="multipart/form-data" action="movieadd.php" method="post" style="width:100%; text-align:center">
<div class="container">

   <tr>
     <th><label for="mname"><b>Movie Name</b></label></th>
     <th><input type="text" placeholder="Movie Name" name="mname" required></th>
   </tr>

    <br>
    <br>

   <tr>
     <th><label for="genre"><b>Movie Genre</b></label></th>
     <th><input type="text" placeholder="Movie genre" name="genre" required></th>
   </tr>
    <br>
    <br>


   <tr>
     <th><label for="discription"><b>Movie discripion</b></label></th>
     <th><input type="text" placeholder="Movie discripion" name="discription" required></th>
   </tr>
    <br>
    <br>

   <tr>
     <th><label for="age"><b>Age rating</b></label></th>
     <th><input type="text" placeholder="Age rating" name="age" required></th>
   </tr>
    <br>
    <br>

   <tr>
     <th><label for="runtime"><b>Movie run time</b></label></th>
     <th><input type="text" placeholder="Movie run time" name="runtime" required></th>
   </tr>

   <tr>
     <th><label for="price"><b>Movie price</b></label></th>
     <th><input type="text" placeholder="Movie price" name="price" required></th>
   </tr>

   <tr>
     <th><label for="kids"><b>Part of kids club</b></label></th>
     <th><input type="checkbox" name="kids" value="kids"></th>
   </tr>
    <br>
    <br>

   <tr>
     <th><label for="photo"><b>Movie thumbnail (Photo)</b></label></th>
     <th><input type="file" placeholder="Movie thumbnail (Photo)" name="photo" required></th>
   </tr>
    <br>
    <tr>
    </tr>
    <br>
</table>
<br>
<br>
<br>

<h1></h1>
<table style="width:65%">

<tr>
     <th>Week Days</th>
     <th></th>
     <th>Weekend Days</th>
</tr>

<tr>
     <th><label for="wtime1"><b>Time 1 </b></label></th>
     <th><input type="text" placeholder="hh:mm" name="wtime1"></th>

     <th><label for="etime1"><b>Time 1 </b></label></th>
     <th><input type="text" placeholder="hh:mm" name="etime1"></th>
</tr>

<tr>
     <th><label for="wtime2"><b>Time 2 </b></label></th>
     <th><input type="text" placeholder="hh:mm" name="wtime2"></th>

     <th><label for="etime2"><b>Time 2 </b></label></th>
     <th><input type="text" placeholder="hh:mm" name="etime2"></th>
</tr>

<tr>
     <th><label for="wtime3"><b>Time 3 </b></label></th>
     <th><input type="text" placeholder="hh:mm" name="wtime3"></th>

     <th><label for="etime3"><b>Time 3 </b></label></th>
     <th><input type="text" placeholder="hh:mm" name="etime3"></th>
</tr>

<tr>
     <th><label for="wtime4"><b>Time 4 </b></label></th>
     <th><input type="text" placeholder="hh:mm" name="wtime4"></th>

     <th><label for="etime4"><b>Time 4 </b></label></th>
     <th><input type="text" placeholder="hh:mm" name="etime4"></th>
</tr>

<tr>
     <th><label for="wtime5"><b>Time 5 </b></label></th>
     <th><input type="text" placeholder="hh:mm" name="wtime5"></th>

     <th><label for="etime5"><b>Time 5 </b></label></th>
     <th><input type="text" placeholder="hh:mm" name="etime5"></th>
</tr>


</table>


     <div id="crap">
     <button href="movieadd.php" class="button" type="submit">Add Movie</button>
     </div>
     <br>
     <br>

    </div>
   <br>
   <br>

  </form>




 </center>
</div>
<?php
include 'footer.php'
?>
</body>

</html>

