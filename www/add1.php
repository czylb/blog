<?php
session_start();					
include_once("conn/conn.php");			
$name = $_SESSION['name'];
$title = $_POST['title'];
$time = time();
$leaveword = $_POST['leaveword'];
$sql = "select name from word where name='".$name."'";
   $query = mysql_query($sql);
   $rows=mysql_fetch_array($query);
   mysql_free_result($query);
   if ($rows['name']==$name) {
   	$result = mysql_query("select max(count) from word where name = '".$name."'");
   	if(mysql_query("insert into word (name,time,title,leaveword,count) values('".$name."','".$time."','".$title."','".$leaveword."','".$result."+1')")){
	echo "<script>alert('博文发表成功！');history.back();</script>";
}else{
  	echo "<script>alert('博文发表失败！');history.back();</script>";
}
}
   else {
       if(mysql_query("insert into word (name,time,title,leaveword,count) values('".$name."','".$time."','".$title."','".$leaveword."','0')")){
       	echo "<script>alert('博文发表成功！');history.back();</script>";
}else{
  	echo "<script>alert('博文发表失败！');history.back();</script>";
  }
}
  ?>
       