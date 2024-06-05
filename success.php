<!--<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Yes it is Working</h1>
</body>
</html>-->

<?php 

//session_start();

//$image = $_SESSION["variable"];
//$myimage = imagecreatefromjpeg($image);

//header("Content-type: image/jpeg");

//imagejpeg($myimage);

//echo $_SESSION["variable"];

session_start();
//$images = $_SESSION["imgstr"];

//echo $images;

//echo $_SESSION["firstname"] . '.jpeg';

$pimage = imagecreatefromjpeg($_SESSION["firstname"] . '.jpeg');

header("Content-type: image/jpeg");

imagejpeg($pimage);


//$myimage = imagecreatefromstring($images);

//header("Content-type: image/jpeg");

//imagejpeg($myimage);








?>