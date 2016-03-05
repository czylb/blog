<?php
header("Content-type: text/html; charset=utf-8"); 
session_start();
$name = $_SESSION["name"];
$savePath = 'jpg';
$filename=$_FILES['file']['name'];
$filename1= 'jpg/1.jpg'; 
if (file_exists($filename1)) { 
move_uploaded_file($_FILES['file']['tmp_name'],"$savePath/$filename"); 
echo "<script language='javascript'> alert('已保存至文件夹jpg');location.href='photo.php';</script>";
$img=imagecreatefromjpeg("touxiang/".$filename);
rename($filename, 2);
}
else{
	move_uploaded_file($_FILES['file']['tmp_name'],"$savePath/$filename"); 
echo "<script language='javascript'> alert('已保存至文件夹jpg');location.href='photo.php';</script>";
$img=imagecreatefromjpeg("touxiang/".$filename);
rename($filename, 1);
}