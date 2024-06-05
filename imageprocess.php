<?php

session_start();


$picturename = $_SESSION["firstname"];

if (isset($_POST["image"])){
$data = $_POST["image"];

$image_array_1 = explode(";", $data);

$image_array_2 = explode(",", $image_array_1[1]);

$data = base64_decode($image_array_2[1]);

$_SESSION["imgstr"] = $data;

$imageName = $_SESSION["firstname"] . '.jpeg';

file_put_contents($imageName, $data);

$_SESSION["variable"] = $imageName;

//$image_file = addslashes(file_get_contents($imageName));
}

header("Location:image.php")




?>