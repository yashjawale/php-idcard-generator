<?php

session_start();

if(isset($_POST['firstname'])){ $firstname = $_POST['firstname']; }
//if(isset($_POST['lastname'])){ $lastname = $_POST['lastname']; }
//$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$district = $_POST['district'];
$village = $_POST['village'];
$pincode = $_POST['pincode'];
$date = $_POST['date'];

if (!empty($firstname) || !empty($lastname) || !empty($email) || !empty($phone) || !empty($district) || !empty($village) || !empty($pincode) || !empty($date)) {
	$_SESSION["firstname"] = $firstname;
	$_SESSION["lastname"] = $lastname;
	$_SESSION["email"] = $email;
	$_SESSION["phone"] = $phone;
	$_SESSION["district"] = $district;
	$_SESSION["village"] = $village;
	$_SESSION["pincode"] = $pincode;
	$_SESSION["date"] = $date;

	header("Location:imagecropp.php");


} else {
	echo "Please go back and fill all the fields";
	die();
}














?>