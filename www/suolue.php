<?php
$filename= $_GET['filename'];
$width = $_GET['width'];
$height = $_GET['height'];
$path="touxiang/"; 

header('Content-type: image/jpeg');

list($width_orig, $height_orig) = getimagesize($path.$filename);
if ($width && ($width_orig < $height_orig)) {
  $width = ($height / $height_orig) * $width_orig;
} else {
  $height = ($width / $width_orig) * $height_orig;
}

$image_p = imagecreatetruecolor($width, $height);
$image = imagecreatefromjpeg($path.$filename);
imagecopyresampled($image_p,$image,0,0,0,0,$width,$height,$width_orig,$height_orig);

imagejpeg($image_p, null, 100);

imagedestroy ($image_p);
?>
