<?php
include_once("conn/conn.php");	
session_start();		
$name = $_SESSION['name'];
$password = $_POST['password'];
$email = $_POST['email'];


if(mysql_query("update user set password='".md5($password)."',email='".$email."' where name='".$name."'")){
	echo "<script>alert('信息更改成功！');history.back();</script>";
}else{
  	echo "<script>alert('信息更改失败！');history.back();</script>";
}
?>