<?php
	
	session_start();

	$user = $_SESSION["firstname"];
	
	//$userimage = imagecreatefromjpeg($_SESSION["firstname"].'.jpeg');
	$userimage = imagecreatefromjpeg($user.'.jpeg');
	$image = imagecreatefromjpeg("idcard.jpeg");

	$textcolor = imagecolorallocate($image, 0, 0, 0);
	putenv('GDFONTPATH=' . realpath('.'));
	//$font = "cambria";
	$font = dirname(__FILE__) . '/Ubuntu-Regular.ttf';

	$text = 'Name: '.$_SESSION["firstname"].'  '.$_SESSION["lastname"];
	$text1 = 'e-mail: ' .$_SESSION["email"];
	$text2 = 'Mob. No.:  ' .$_SESSION["phone"];
	$text3 = 'District: ' .$_SESSION["district"];
	$text4 = 'Village: ' .$_SESSION["village"];
	$text5 = 'DOB: ' .$_SESSION["date"];
	$text6 = 'Pincode: ' .$_SESSION["pincode"];

	//imagestring($image, 5, 200, 200, "Test text", $textcolor);
	imagettftext($image, 40, 0, 70, 310, $textcolor, $font, $text);
	imagettftext($image, 28, 0, 70, 370, $textcolor, $font, $text1);
	imagettftext($image, 28, 0, 70, 430, $textcolor, $font, $text2);
	imagettftext($image, 28, 0, 70, 490, $textcolor, $font, $text3);
	imagettftext($image, 28, 0, 70, 550, $textcolor, $font, $text4);
	imagettftext($image, 28, 0, 70, 610, $textcolor, $font, $text5);
	imagettftext($image, 28, 0, 70, 670, $textcolor, $font, $text6);
	//imagettftext(image, size, angle, x, y, color, fontfile, text)

	imagecopyresampled($image, $userimage, 800, 300, 0, 0, 200, 250, 200, 250);
	//imagecopyresampled($image, src_image, dst_x, dst_y, src_x, src_y, 200, 250, 200, 250)

	header("Content-type: image/jpeg");

	imagejpeg($image);

	
	//unlink($user.'.jpeg');
	


	//if (imagejpeg) {
	//	unlink(filename)
	//}














?>