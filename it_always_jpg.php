<?php
// include('image_lib.php');
// $txt=imagelib("It Always Seem Impossible Untill It's Done");
// $txt=implode(" ",$txt);
// $image_bg="eng.jpg";
// $font="D:/xampp/htdocs/hindi_text_to_image/font/Roboto/Roboto-Bold.ttf";
// // Load an image from jpeg URL
// $im = imagecreatefromjpeg($image_bg);
  
// $name="Basant Mallick";

// $color=imagecolorallocate($im,255,255,255);

// imagefttext($im,60,0,150,3650,$color,$font,$name);
// imagejpeg($im,"output/eng1.jpg");


// imagedestroy($im);



header('content-type:image/jpeg');
	$font = dirname(__FILE__) . "/font/Roboto/Roboto-Bold.ttf";
	$font2 = dirname(__FILE__) . "/font/Roboto/Roboto-Bold.ttf";
$image=imagecreatefromjpeg("eng.jpg");
$color=imagecolorallocate($image,255,255,255);
$name="Basant Mallick";
imagettftext($image,50,0,85,220,$color,$font,$name);

$color1=imagecolorallocate($image,255,250,250);
$date="www.basantmallick.com";
imagettftext($image,20,25,120,345,$color1,$font2,$date);
imagejpeg($image);
imagedestroy($image);




?>

<center><img src="output/eng1.jpg" width="500px"/></center>





