<html>
<body>

<?php
$mname = $_POST["mname"];
$genre = $_POST["genre"];
$Age = $_POST["age"];
$Runtime = $_POST["runtime"];
$photo = "movie_photos/" . basename($_FILES["photo"]["name"]);
$discription = $_POST["discription"];

$conn = mysqli_connect("localhost","bobbie","pug","webdev");
if ($conn->connect_error)
{
        die("Connection failed: " . $conn->connect_error);
}


$wtime1 = $_POST["wtime1"];
$wtime2 = $_POST["wtime2"];
$wtime3 = $_POST["wtime3"];
$wtime4 = $_POST["wtime4"];
$wtime5 = $_POST["wtime5"];

$etime1 = $_POST["etime1"];
$etime2 = $_POST["etime2"];
$etime3 = $_POST["etime3"];
$etime4 = $_POST["etime4"];
$etime5 = $_POST["etime5"];

$result = $conn->query("insert into MOVIES (Age,Runtime,Name,Genre,Photo,Discription) values('$Age','$Runtime','$mname','$genre','$photo','$discription');");

$target_file = "movie_photos/" . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);


//add weekend times to the database
$result = $conn->query("SELECT MAX(MOVIEID) FROM MOVIES");


while($row = $result->fetch_assoc()) 
{
   $current_movie_id =  $row["MAX(MOVIEID)"];
}

$pvar="etime";
for ($x = 1; ${$pvar . $x}[0] != NULL; $x++) 
{
	$result = $conn->query("insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('e','$current_movie_id','${$pvar . $x}');");
}

$pvar="wtime";
for ($x = 1; ${$pvar . $x}[0] != NULL; $x++) 
{
	$result = $conn->query("insert into SHOWTIMES (DAYTYPE,MOVIEID, TIME) values('w','$current_movie_id','${$pvar . $x}');");
}

$conn->close();
header("Location: index.html");
die();
$conn->close();
?>





</body>
</html>
