<!DOCTYPE html><!-- 个人资料编辑页面 -->
<html>
<head>
	<title>DY BLOG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="about.css">
</head>
<body>
<div class="whole">
	<div class="top">
		<div class="logo">
			<i class="iconfont">&#xe67c;</i>Blog
			<i class="iconfont">&#xe6f0;</i>
			<i class="iconfont1">&#xe607;</i>
		</div><!-- logo -->
		<div class="nav">
			<ul>
				<li>
					<a href="home1.php" target="blank">个人中心</a>
					<p class="fly1">home</p>
				</li>
				<li>
					<a href="about.php"target="blank"><span id="ge">个人资料</span></a>
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
		<div class="middle">
			<div class="rl">
				<ul>
					<li><span id="lo1"><p>个人信息</p></span></li>
					<li><span id="lo2"><p>头像昵称</p></span></li>
					<li><span id="lo3"><p>登录密码</p></span></li>
				</ul>
				<div id="fir">
					<p>个人资料:</p>
					<?php					
					include_once("conn/conn.php");
					session_start();
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
					echo "性别:";
					$sql5=mysql_query("select sex from user where name='".$name."'");
					while($row = mysql_fetch_array($sql5)){
						echo "&nbsp";
						echo $row['sex'];
						echo "<br />";
					}
					?>
					<span id="pu">编辑</span>
					<div class="sho">
						<form action="add_information.php" method="POST">
            			<div><input name="username"type="text"class="ur" />姓名</div>
            			<div><input name="birthday"type="text"class="ur" />出生年月</div>
            			<div><input type="text" name="sex">性别</div>
            			<div><input name="email" type="text"class="ll"/>邮箱地址</div>
            			<div><input type="submit" class="bn" value="保存"></div>
        			</form>
					</div>
				</div>
				<div id="sec">
				    <p>头像：</p>
					<div class="fra"><img src="suolue.php?filename=1.jpg&width=120&height=120"class="img">
			 		</div><!-- 用户头像框 -->
			 		<div class="dd">
				 		<form action="touxiang.php" method="POST" enctype="multipart/form-data">	
				 			<label for="file">文件名:</label>
				 			<input type="file" name="file" id="file" /> 
				 			<br><br>
				 			<input type="submit" value="提交" name="提交" />
				 		</form>	
			 		</div>
					<p>昵称:
					<?php					
					include_once("conn/conn.php");
					$name = $_SESSION["name"];		
					$sql1=mysql_query("select nicheng from user where name='".$name."'");
					while($row = mysql_fetch_array($sql1)){
						echo $row['nicheng'];
					}
					?>
					</p>
					<span id="uo">编辑</span>
					<div class="sho1">
						<form action="nicheng.php" method="POST">
            				<div><input name="nicheng"type="text"class="ur" /></div>
            				<div><input type="submit" class="bn" value="保存"></div>
        				</form>
        			</div>
				</div>
				<div id="thi">
					<form action="mima.php" method="POST">
            			<div><input name="password" type="password"class="pw"/>密码</div>
            			<div><input name="password1" type="password"class="pw"/>确认密码</div>
            			<div><input name="email" type="text"class="ll"/>邮箱地址</div>
            			<div><input type="submit" class="bn" value="保存"></div>
        			</form>
				</div>
			</div>
		</div>
</body>
<script type="text/javascript">
        var tab1=document.querySelector('#lo1');
        var tab2=document.querySelector('#lo2');
        var tab3=document.querySelector('#lo3');
        var tab4=document.querySelector('#pu');
        var tab5=document.querySelector('#uo');
        var show1=document.querySelector('#fir');
        var show2=document.querySelector('#sec');
        var show3=document.querySelector('#thi');
        var show4=document.querySelector('.sho');
        var show5=document.querySelector('.sho1');
        tab1.addEventListener('click',function(){
            tab1.style.color="#923232"
            tab2.style.color="black"
            tab3.style.color="black"
            show1.style.display="block"
            show2.style.display="none"
            show3.style.display="none"
        })
        tab2.addEventListener('click',function(){
            tab2.style.color="#923232"
            tab1.style.color="black"
            tab3.style.color="black"
            show2.style.display="block"
            show1.style.display="none"
            show3.style.display="none"
        })
        tab3.addEventListener('click',function(){
            tab3.style.color="#923232"
            tab1.style.color="black"
            tab2.style.color="black"
            show3.style.display="block"
            show1.style.display="none"
            show2.style.display="none"
        })
        tab4.addEventListener('click',function(){
            show4.style.display="block"
        })
        tab5.addEventListener('click',function(){
            show5.style.display="block"
        })
    </script>
</html>