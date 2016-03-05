<!DOCTYPE html>
<html>
<head>
	<title>注册页</title>
</head>
<body>
<?php
	include_once 'conn/conn.php';
	$sql = "insert into user(name,password,email,active) values('".trim($_POST['regname'])."','".md5(trim($_POST['regpwd1']))."','".$_POST['email']."','1')";
		$num = $conne->uidRst($sql);
		if($num == 1){
                  echo "alert('注册成功')<script>location.href='home.html';</script>";
		}0
?>
</body>
</html>

