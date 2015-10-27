<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>广工信息论课程网--欢迎您的注册</title>
		<link href="../login/login.css" rel="stylesheet" type="text/css">
	</head>
		<script language="javascript">
function check(form1){
	if(form1.txtUsername.value==""){
		alert("请输入账号!");form1.txtUsername.focus();return false;
	}
	if(form1.pwdPassword.value==""){
		alert("请输入密码!");form1.pwdPassword.focus();return false;
	}
	if(form1.pwdPassword1.value==""){
		alert("请确认密码!");form1.pwdPassword1.focus();return false;
	}
	if(form1.email.value==""){
		alert("请输入邮箱!");form1.email.focus();return false;
	}
	if(form1.phone.value==""){
		alert("请输入联系电话!");form1.phone.focus();return false;
	}	
	if(form1.pwdPassword.value!=form1.pwdPassword1.value){
		alert("您两次输入的密码不一致，请重新输入!");form1.pwdPassword1.focus();return false;
	}
}
</script>
	<body>
		<form action="../user_ok.php" method="post" name="frmSearch">  <!--预留接口-->
          <div id="nav" align="center" >
                <a href="../index.php">
                	<img src="../login/img/GDUTlogo.jpg" alt="广东工业大学信息论课程"/ height="100px;">
                </a>
                <p>欢迎注册</p>	
            </div>
          <div id="zhuce1" align="center">   
          	  <table>
          	  	<tr>
          	  		<td>
          	  			<p>账号：</p>
                    </td>
          	  		<td>
          	  			<input type="text" name="txtUsername" value="" size="20" maxlength="20">
          	  		</td>
          	  	</tr>
          	  	<tr>
          	  		<td>
          	  			<p>密码：</p>
          	  		</td>
          	  		<td>
          	  			<input type="password" name="pwdPassword" value="" size="20" maxlength="20">
          	  		</td>
          	  	</tr>
          	  	<tr>
          	  		<td>
          	  			<p>请确认密码：</p>
          	  		</td>
          	  		<td>
          	  			<input type="password" name="pwdPassword1" value="" size="20" maxlength="20">
          	  		</td>
          	  	</tr>
				<tr>
          	  		<td>
          	  			<p>邮箱：</p>
                    </td>
          	  		<td>
          	  			<input type="text" name="email" value="" size="20" maxlength="20">
          	  		</td>
          	  	</tr>
					<tr>
          	  		<td>
          	  			<p>联系电话：</p>
                    </td>
          	  		<td>
          	  			<input type="text" name="phone" value="" size="20" maxlength="20">
          	  		</td>
          	  	</tr>
          	  	<tr>
          	  		<td>验证码：<input type="text" name="authnum" value=""size="4" maxlength="4"></td>
          	  		<td><img  title="点击刷新" src="../captcha.php" align="absbottom" onclick="this.src='../captcha.php?'+Math.random();"></img></td>
          	  	</tr>
          	  	<tr>
          	  		<td></td>
          	  		<td>
          	  			
          	  		</td>
          	  	</tr>
          	  	<tr>
          	  		<td>         	  			          	  			
          	  		</td>
          	  		<td style="text-align: center;">
          	  			<input type="submit" value="注册" onClick="return  check(frmSearch)">
          	  			<input type="reset" value="重置"> 
          	  		</td>
          	  	</tr>
          	  </table>
         </div>
         <!--<div id="footer">
				<p>508设计工作室版权所有，本工作室保留最终解释权</p>
				<div id="foot">
					<ul>
						<li><a href="../about/about.html">关于我们</a></li>
						<li class="shu">丨</li>
						<li><a href="../contact/contact.html">联系我们</a></li>
						<li class="shu">丨</li>
						<li><a href="../notice/notice.html">负责声明</a></li>
						<li class="shu">丨</li>
						<li><a href="../advice/advice.html">意见反馈</a></li>
					</ul>
				</div>
		</div>-->
       </form>
	</body>
</html>
