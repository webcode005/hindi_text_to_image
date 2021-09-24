<?php
// include('image_lib.php');
// $txt=imagelib("It Always Seem Impossible Untill It's Done");
// $txt=implode(" ",$txt);
// $image_bg="output/always.jpg";
// $font="D:/xampp/htdocs/hindi_text_to_image/font/mangal.ttf";

// $im=imagecreatefromjpeg($image_bg);

// $color=imagecolorallocate($im,255,100,100);
// imagefttext($im,60,0,150,650,$color,$font,$txt);
// imagejpeg($im,"output/always.jpg");
?>
<center><img src="output/always.jpg" width="500px"/></center>



<?php
// Create a blank image and add some text
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

// Set the content type header - in this case image/jpeg
header('Content-Type: image/jpeg');

// Output the image
imagejpeg($im);

// Free up memory
imagedestroy($im);
?>