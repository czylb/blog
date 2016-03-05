<?php
header("Content-type: text/html; charset=utf-8"); 
session_start();
$name = $_SESSION["name"];
$savePath = 'touxiang';
$filename=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"$savePath/$filename"); 
echo "<script language='javascript'> alert('已保存至文件夹touxiang');location.href='home1.php';</script>";
$img=imagecreatefromjpeg("touxiang/".$filename);
rename($filename, 1);


