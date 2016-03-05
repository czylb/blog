<!DOCTYPE html><!-- 该界面为用户登陆后所见页面 -->
<html>
<head>
	<title>DY BLOG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="home1.css">
</head>
<body>
<div class="whole">
	<div class="top">
		<div class="logo">
			<i class="iconfont">&#xe67c;</i>Blog
			<i class="iconfont">&#xe6f0;</i>
			<i class="iconfont1">&#xe607;</i>
		</div><!-- logo -->
		<div class="name">
			<p><?php					
					include_once("conn/conn.php");
					session_start();
					$name = $_SESSION["name"];			
					$sql=mysql_query("select nicheng from user where name='".$name."'");
					while($row = mysql_fetch_array($sql)){
						echo $row['nicheng'];
					}
				?>的博客</p>
		</div><!-- 新增的用户昵称栏 -->
		<div class="nav">
			<ul>
				<li>
					<a href="home1.php" target="blank"><span id="ren">个人中心</span></a>
					<p class="fly1">home</p>
				</li>
				<li>
					<a href="about.php"target="blank">个人资料</a>
					<p class="fly2">about me</p>
				</li>
				<li>
					<a href="essay.php"target="blank">闲言碎语</a>
					<p class="fly3">essay</p>
				</li>
				<li>
					<a href="photo.php"target="blank">相册</a>
					<p class="fly4">photo</p>
				</li>
			</ul>
		</div><!-- 导航栏完 -->
		<div class="top-right">
			<div class="add"><a target="blank"href="add.php">发博文</a></div><!-- php文件我没写这是发博文的php -->
			<div class="about"><a target="blank"href="home.html">首页</a></div>
		</div><!-- 导航栏右边的两个链接完 -->
		<div class="middle">
			<div id="left">
			 	<div class="up1">
			 		<p>个人资料</p>
			 		<a href="about.php"target="blank">管理</a>
			 	</div>
			 	<div class="fra">
			 		<img src="suolue.php?filename=1.jpg&width=180&height=180">
			 	</div><!-- 用户头像框 -->
			 	<div class="infor">
			        <?php					
					include_once("conn/conn.php");
					$name = $_SESSION["name"];
					echo "姓名：";			
					$sql1=mysql_query("select username from user where name='".$name."'");
					while($row = mysql_fetch_array($sql1)){
						echo "&nbsp";
						echo $row['username'];
						echo "<br />";
					}
					echo "出生年月:";
					$sql2=mysql_query("select birthday from user where name='".$name."'");
					while($row = mysql_fetch_array($sql2)){
						echo "&nbsp";
						echo $row['birthday'];
						echo "<br />";
					}
					echo "email:";
					$sql4=mysql_query("select email from user where name='".$name."'");
					while($row = mysql_fetch_array($sql4)){
						echo "&nbsp";
						echo $row['email'];
						echo "<br />";
					}
					?>
			 	</div>
		    </div><!-- 资料块 -->
			<div id="right">
				<div class="up2">
			 		<p>相册</p>
			 		<a href="photo.php"target="blank">管理</a>
			 	</div>
			 	<div class="pp">
			 		<div class="c"><img src="zhaopiansuolue.php?filename=1.jpg&width=130&height=130"></div>
			 		<div class="c"><img src="zhaopiansuolue.php?filename=2.jpg&width=130&height=130"></div>
			 	</div><!-- 图片展示块 -->
			</div>
			<div class="bottom"><!-- 博文展示块 -->
				<div class="d">
					<p><?php					
					include_once("conn/conn.php");
					$name = $_SESSION["name"];			
					$sql=mysql_query("select title from word where name='".$name."' and count = 1");
					while($row = mysql_fetch_array($sql)){
						echo $row['title'];
					}
				?></p>
					<p>
					<?php					
					include_once("conn/conn.php");
					$name = $_SESSION["name"];			
					$sql=mysql_query("select leaveword from word where name='".$name."' and count = 2");
					while($row = mysql_fetch_array($sql)){
						echo $row['leaveword'];
					}
				?>
				</p>
					<a href="essay.php">阅读全文<i class="iconfont3">&#xe622;</i></a>
				</div>
				<div class="y">
					<p><?php					
					include_once("conn/conn.php");
					$name = $_SESSION["name"];			
					$sql=mysql_query("select title from word where name='".$name."' and count = 2");
					while($row = mysql_fetch_array($sql)){
						echo $row['title'];
					}
				?></p>
					<p>
					<?php					
					include_once("conn/conn.php");
					$name = $_SESSION["name"];			
					$sql=mysql_query("select leaveword from word where name='".$name."' and count = 2");
					while($row = mysql_fetch_array($sql)){
						echo $row['leaveword'];
					}
				?>
				</p>
					<a href="essay.php">阅读全文<i class="iconfont3">&#xe622;</i></a>
				</div>
			</div>
		</div>
</body>
</html>