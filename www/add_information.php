<?php					
include_once("conn/conn.php");	
session_start();		
$name = $_SESSION['name'];
$username = $_POST['username'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];	
$email = $_POST['email'];


if(mysql_query("update user set username='".$username."',birthday='".$birthday."',sex='".$sex."',email='".$email."' where name='".$name."'")){
	echo "<script>alert('信息更改成功！');history.back();</script>";
}else{
  	echo "<script>alert('信息更改失败！');history.back();</script>";
}
?>