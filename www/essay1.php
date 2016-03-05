<!DOCTYPE html><!-- 博文展示页面 -->
<html>
<head>
	<title>DY BLOG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="essay1.css">
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
					$name = $_SESSION["name1"];		
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
					<a href="essay1.php"target="blank"><span id="ge">闲言碎语</span></a>
					<p class="fly3">essay</p>
				</li>
				<li>
					<a href="photo1.php"target="blank">相册</a>
					<p class="fly4">photo</p>
				</li>
			</ul>
		</div><!-- 导航栏完 -->
		<div class="top-right">
			<!-- <div class="add"><a target="blank"href="add.html">发博文</a></div> -->
			<div class="about"><a target="blank"href="home.html">首页</a></div>
		</div><!-- 导航栏右边的两个链接完 -->
		<div class="middle">
			<div id="left">
			 	<div class="up1">
			 		<p>博文</p>
			 		<!-- <a href="about.html"target="blank">管理</a> -->
			 	</div>
			 	<div class=upp><p id="qb">全部博文</p></div>
			 	<!--鼠标点击后为全部博文标题列表，未点击时为个人主页中点击博文查看跳转的博文全文 -->
			 	<div class=upp><a href="#">私密博文</a></div><!-- 不用做这个功能 -->
			 	<div class=upp><a href="#">草稿箱</a></div><!-- 不用做这个功能 -->
			 	<div class=upp><a href="#">回收站</a></div><!-- 不用做这个功能 -->
		    </div>
			<div id="right">
				<div class="up2"><?php					
					include_once("conn/conn.php");
					$name = $_SESSION["name1"];			
					$sql=mysql_query("select title from word where name='".$name."' and count = 1");
					while($row = mysql_fetch_array($sql)){
						echo $row['title'];
					}
				?>
				 </div><!-- 这里是提醒你这个块是文章标题的块你可以把这两个字删了 -->
			 	<div class="impor">
			 	<?php					
					include_once("conn/conn.php");
					$name = $_SESSION["name1"];			
					$sql=mysql_query("select leaveword from word where name='".$name."' and count = 1");
					while($row = mysql_fetch_array($sql)){
						echo $row['leaveword'];
					}
				?>
				</div><!-- 这里是提醒你这个块是正文的块你可以把正文两个字删了 -->
			 	<div class=ping>
			 		<div class="mi">
			 			<div class="ds-post-main"></div>
		                <div class="ds-avatar">
			            	<a href="#nogo" ><span class="hf">评论区</span></a>
		                </div>
		                <div class="ds-comment-body">
		                <?php					
					include_once("conn/conn.php");
					$name = "游客";			
					$sql=mysql_query("select pinglun1 from pinglun1 where name = '".$name."'");
					while($row = mysql_fetch_array($sql)){
						echo $row['pinglun1'];
					}
					?>  </div><!-- 用户评论显示的块 -->				 		
			 		</div>
			 		<div class="send">
				 		<form action="pinglun1.php" method="POST">
				 		    <textarea name = "pinglun"></textarea>
				 		    <input type="submit" value="发布" name="提交" />
				 		</form>
			 		</div>
			 	</div>
			</div>
			<div id="right1">
				<div class="up22">
			 		<p>全部博文</p>
			 	</div>
			 	<?php					
					include_once("conn/conn.php");
					$name = $_SESSION["name1"];	
					$sql1=mysql_query("select title from word where name='".$name."' and count = 1");
					while($row = mysql_fetch_array($sql1)){
						echo $row['title'];
						echo "</br>";
					}	
					$sql2=mysql_query("select title from word where name='".$name."' and count = 2");
					while($row = mysql_fetch_array($sql2)){
						echo $row['title'];
						echo "</br>";
					}
					$sql3=mysql_query("select title from word where name='".$name."' and count = 3");
					while($row = mysql_fetch_array($sql3)){
						echo $row['title'];
						echo "</br>";
					}
				?><!-- 这个块为全部博文标题快 -->
			</div>
			</div>
		</div>
</body>
<script type="text/javascript">
	    var tab=document.querySelector('#qb');
	    var show1=document.querySelector('#right');
        var show2=document.querySelector('#right1');
        tab.addEventListener('click',function(){
            tab.style.color="#923232";
            show1.style.display="none"
            show2.style.display="block"
        })
</script>
</html>