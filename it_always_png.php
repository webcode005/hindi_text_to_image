<?php
include('image_lib.php');
$txt=imagelib("It Always Seem Impossible Untill It's Done");
$txt=implode(" ",$txt);
$image_bg="bg.png";
$font="D:/xampp/htdocs/hindi_text_to_image/font/mangal.ttf";
$im=imagecreatefrompng($image_bg);
$color=imagecolorallocate($im,255,100,100);
imagefttext($im,60,0,150,650,$color,$font,$txt);
imagepng($im,"output/always.png");
?>
<center><img src="output/always.png" width="500px"/></center>