<!doctype html>

<html>

<head>
	<title>Luminous Contact Us</title>
</head>

<body>
<h1><center>
<?php
include 'header.php';
if(isset($_GET['forgot']))
{
	$pr .="<br><br>Please contact us with your email address so we can confirm its you. Thanks";
}
echo $pr;
?>
</h1></center>
<br>
<br>
</p>

	<div id="navbar">
	<a href="index.html">Home</a>
	<a href="kidsclub.html">Kids Club</a>
	<a href="#contact">Book ahead</a>
	</div>
	
	<div class = "background">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<center>	
		<p>
			Phone: 01448234
			<br>
			Email: noreply@goaway.com
			<br>
			<br>
		<p>

		<div id="map">
		<iframe width="650" height="550" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2385.077526827618!2d-6.242814803822449!3d53.28814626891538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670971f7c894fd%3A0xe84c04a6d359ebcd!2sMovies%40Dundrum!5e0!3m2!1sen!2sie!4v1540992671230" frameborder="0" allowfullscreen="" style=""></iframe>
		</div>
		</div>
	</center>
<?php
include 'footer.php';
?>

    </div>
		
</body>

</html>
