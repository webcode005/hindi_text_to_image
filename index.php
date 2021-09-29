<?php
include('image_lib.php');
$txt=imagelib("सफलता उनको मिलती है जो Risk लेना जानते हैं ");
$txt=implode(" ",$txt);
$image_bg="bg.png";
$font="D:/xampp/htdocs/hindi_text_to_image/font/mangal.ttf";
$im=imagecreatefrompng($image_bg);
$color=imagecolorallocate($im,255,100,100);
imagefttext($im,60,0,150,650,$color,$font,$txt);
imagepng($im,"output/output.png");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hindi Text On Image Using PHP</title>
</head>
<body>

		<center><img src="output/output.png" width="500px"/></center>

</body>
</html>
