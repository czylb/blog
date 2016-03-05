<?php
session_start();					
include_once("conn/conn.php");			
$name = $_SESSION['name'];
$nicheng = $_POST['name'];

if(mysql_query("update user set nicheng='".$nicheng."'")){
	echo "<script>alert('信息更改成功！');history.back();</script>";
}else{
  	echo "<script>alert('信息更改失败！');history.back();</script>";
}
?>