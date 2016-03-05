<?php
session_start();
header('Content-Type:text/html;charset=UTF-8');
include_once 'conn/conn.php';
$name = $_POST['lgname'];
$pwd = $_POST['lgpwd'];
$valcode = $_SESSION['Checknum'];
$Checknum = $_POST['yanzhengma'];
if(!empty($name)&&!empty($pwd)){
$query = @mysql_query("select * from user where name = '$name' and password = '".md5($pwd)."'")
or die("SQL语句执行失败");

if($row = mysql_fetch_array($query)&&$Checknum==$valcode)  
{
    $_SESSION['name'] = $name;
        echo "<script> alert('登陆成功，转到个人主页');location.href='about.php';</script>";
    }else{
        echo "<script> alert('登陆失败，回到上个页面');location.href='log.html';</script>";
    }

}else{
    echo "<script> alert('登陆失败，用户名或密码错误');location.href='log.html';</script>";
}
?>