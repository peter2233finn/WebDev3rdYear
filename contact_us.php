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
else
{
	$pr .="<br><br>";
}
echo $pr;
?>
</h1>

	<center>
		<div id="banner">
			<img style="width:510px;height:300px;margin-top:20px" src="popcorn.jpg"><img style="width:500px;height:300px;margin-top:20px" src="popcorn.jpg"><img style="width:507px;height:300px;margintop:20px" src="popcorn.jpg">
			<br>
			<br>
			<br>
			<br>
		</div>
	
		<div id="map">
		<iframe width="650" height="550" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2385.077526827618!2d-6.242814803822449!3d53.28814626891538!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670971f7c894fd%3A0xe84c04a6d359ebcd!2sMovies%40Dundrum!5e0!3m2!1sen!2sie!4v1540992671230" frameborder="0" allowfullscreen="" style=""></iframe>
		</div>
		<br>
		<div id="contact_info">
			Phone: 01448234
			<br>
			<a href="https://www.google.ie/search?rlz=1C1CHBF_enIE823IE823&ei=8BMAXO68No6ugQbyl5mACw&q=gmail+login&oq=gmail+login&gs_l=psy-ab.3..0i131j0j0i131j0l7.3091.4173..4522...0.0..0.52.250.6....3..0....1..gws-wiz.......0i71j0i131i67.2LzYNZEpV84">Email: noreply@gmail.com</a>
			<br>
			
		</div>
		
		<div="logos">
		<a href = "https://www.instagram.com/dundrumtc/?hl=en"><img style="width:40px;height:40px;margin-top:20px" src="insta.png"></a>   
		<a href = "https://www.facebook.com/MoviesatDundrum/"><img style="width:40px;height:40px;margin-top:20px" src="facebook.png"></a>   
		<a href = "https://twitter.com/moviesdundrum?lang=en"><img style="width:40px;height:40px;margin-top:20px" src="twitter.png"></a>   
		</div>
		
		</div>
			
	</center>
		
	<div class="footer"><a href="contact_us.html"><p>Contact us</p></a><br><a href="got_question.html"<p>Got a question?</p></a>

    </div>
		
</body>

</html>
