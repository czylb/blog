<!DOCTYPE html><!-- 博文展示页面 -->
<html>
<head>
	<title>DY BLOG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="photo1.css">
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
					$name = "d1";	
					$_SESSION["name1"] = $name;	
					$sql=mysql_query("select nicheng from user where name='".$name."'");
					while($row = mysql_fetch_array($sql)){
						echo $row['nicheng'];
					}
				?>的博客</p>
		</div><!-- 新增的用户昵称栏 -->
		<div class="nav">
			<ul>
				<li>
					<a href="home12.php" target="blank">个人中心</a>
					<p class="fly1">home</p>
				</li>
				<li>
					<a href="about1.php"target="blank">个人资料</a>
					<p class="fly2">about me</p>
				</li>
				<li>
					<a href="essay1.php"target="blank">闲言碎语</a>
					<p class="fly3">essay</p>
				</li>
				<li>
					<a href="photo1.php"target="blank"><span id="ge">相册</span></a>
					<p class="fly4">photo</p>
				</li>
			</ul>
		</div><!-- 导航栏完 -->
		<div class="top-right">
			<!-- <div class="add"><a target="blank"href="potoupload.html">发照片</a></div> -->
			<div class="about"><a target="blank"href="home.html">首页</a></div>
		</div><!-- 导航栏右边的两个链接完 -->
		<div class="middle">
			<div id="left">
			 	<div class="up1">
			 		<p>图片</p>
			 	</div>
			 	<div class=upp><a href="#">最新图片</a></div>
			 	<div class=upp><a href="#">公开</a></div>
			 	<div class=upp><a href="#">加密</a></div>
			 	<div class=upp><a href="#">回收站</a></div>
		    </div>
			<div id="right">
				<div class="up2">
			 		<p>全部图片</p>
			 		<img src="zhaopiansuolue.php?filename=1.jpg&width=150&height=150">
			 		<img src="zhaopiansuolue.php?filename=2.jpg&width=150&height=150">
			 	</div>
			</div><!-- 图片展示块 -->
		</div>
</body>
</html>