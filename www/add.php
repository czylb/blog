<!DOCTYPE html><!-- 博文发表页面-->
<html>
<head>
	<title>DY BLOG</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="add.css">
</head>
<body>
<div class="whole">
	<div class="top">
		<div class="logo">
			<i class="iconfont">&#xe67c;</i>Blog
			<i class="iconfont">&#xe6f0;</i>
			<i class="iconfont1">&#xe607;</i>
		</div><!-- logo -->
		<div>
			<div>
				<form action="add1.php" method="POST">
            		<input name="title"type="text"class="ur" />标题
            		<div><p>发表时间：
            		<?php
            		$time = time();
            		echo date("y-m-d",$time)
            		?>
            		</p></div>
	            	<textarea name="leaveword" rows="30" cols="80"class="pw">
	                </textarea>
                <div id="btndiv">
                	 <button id="lgbtn">发表</button>
                </div>
           </form>
			</div>
		</div>
</body>
</html>