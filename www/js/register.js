function $(id){
	return document.getElementById(id);
}
window.onload = function(){
	$('regname').focus();
	var cname1,cname2,cpwd1,cpwd2,cemail;
	
	$('regname').onkeyup = function (){
		name = $('regname').value;
		cname2 = '';
		if(name.match(/^[a-zA-Z_]*/) == ''){
			$('namediv').innerHTML = '<font color=red>必须以字母或下划线开头</font>';
			cname1 = '';
		}else if(name.length < 2){
			$('namediv').innerHTML = '<font color=red>注册名称必须大于等于2位</font>';
			cname1 = '';
		}else{
			$('namediv').innerHTML = '<font color=green>注册名称符合标准</font>';
			cname1 = 'yes';
		}
		chkreg();
	}
	
	$('regname').onblur = function(){
		name = $('regname').value;
		if(cname1 == 'yes'){
			xmlhttp.open('get','chkname.php?name='+name,true);
			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4){
					if(xmlhttp.status == 200){
						var msg = xmlhttp.responseText;
						if(msg == '1'){
							$('namediv').innerHTML="<font color=green>恭喜您，该用户名可以使用!</font>";
							cname2 = 'yes';
						}else if(msg == '2'){
							$('namediv').innerHTML="<font color=red>用户名被占用！</font>";
							cname2 = '';
						}else{
							$('namediv').innerHTML="<font color=red>"+msg+"</font>";
							cname2 = '';
						}
					}
				}
				chkreg();
			}
			xmlhttp.send(null);
		}
	}
	
	$('regpwd1').onkeyup = function(){
		pwd = $('regpwd1').value;
		pwd2 = $('regpwd2').value;
		if(pwd.length < 6){
			$('pwddiv1').innerHTML = '<font color=red>密码长度最少需要6位</font>';
			cpwd1 = '';
		}else if(pwd.length >= 6 && pwd.length < 12){
			$('pwddiv1').innerHTML = '<font color=green>密码符合要求。密码强度：弱</font>';
			cpwd1 = 'yes';
		}else if((pwd.match(/^[0-9]*$/)!=null) || (pwd.match(/^[a-zA-Z]*$/) != null )){
			$('pwddiv1').innerHTML = '<font color=green>密码符合要求。密码强度：中</font>';
			cpwd1 = 'yes';
		}else{
			$('pwddiv1').innerHTML = '<font color=green>密码符合要求。密码强度：高</font>';
			cpwd1 = 'yes';
		}
		if(pwd2 != '' && pwd != pwd2){
			$('pwddiv2').innerHTML = '<font color=red>两次密码不一致!</font>';
			cpwd2 = '';
		}else if(pwd2 != '' && pwd == pwd2){
			$('pwddiv2').innerHTML = '<font color=green>密码输入正确</font>';
			cpwd2 = 'yes';
		}
		chkreg();
	}
	
	$('regpwd2').onkeyup = function(){
		pwd1 = $('regpwd1').value;
		pwd2 = $('regpwd2').value;
		if(pwd1 != pwd2){
			$('pwddiv2').innerHTML = '<font color=red>两次密码不一致!</font>';
			cpwd2 = '';
		}else{
			$('pwddiv2').innerHTML = '<font color=green>密码输入正确</font>';
			cpwd2 = 'yes';
			chkreg();
		}
	}
	
	$('email').onkeyup = function(){
		emailreg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		$('email').value.match(emailreg);
		if($('email').value.match(emailreg) == null){
			$('emaildiv').innerHTML = '<font color=red>错误的email格式</font>';
			cemail = '';
		}else{
			$('emaildiv').innerHTML = '<font color=green>输入正确</font>';
			cemail = 'yes';
			
		}
		chkreg();
	}
	
	$('regbtn').onclick = function(){
		url = 'register_chk.php?name='+$('regname').value+'&pwd='+$('regpwd1').value+'&email='+$('email').value;
		xmlhttp.open('get',url,true);
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4){
				if(xmlhttp.status == 200){
					msg = xmlhttp.responseText;
					if(msg == '1'){
						alert('注册成功！');
						location='index.php';
					}else if(msg == '-1'){
						alert('注册失败！');
					}else{
						alert(msg);
					}
				}
			}
		}
		xmlhttp.send(null);
	}
}