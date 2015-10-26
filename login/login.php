<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>欢迎登录</title>
	    <link rel="stylesheet" href="login.css" type="text/css">
	</head>
	<script language="javascript">
		function check(form){
			if (form.txtUsername.value==""){
				alert("请输入账号!");form.txtUsername.focus();return false;
			}
			if (form.pwdPassword.value==""){
				alert("请输入密码!");form.pwdPassword.focus();return false;
			}	
		}
		</script>
	<body >
	   <form action="../chklogin.php" method="post" name="frmSearch">  <!--预留接口-->
	   	<div id="page">
	   		<div id="nav" align="center" >
                <a href="../index.php">
                	<img src="img/GDUTlogo.jpg" alt="广东工业大学信息论课程"/ height="100px;">
                </a>
                <p>欢迎登录</p>	
            </div>
            <div id=main>
            	<div id="login" align="center">            
                 <p align="right" ><a href="../enroll/enroll.php" style="text-decoration: none;">立即注册</a></p>               
                 <p>账号:
                  <input type="text" name="txtUsername" value="" size="20" maxlength="20">
                 </p>
                <p>密码:
                 <input type="password" name="pwdPassword" value=""size="20" maxlength="20">
                </p>
				<tr>
          	  		<td>验证码：</td>
          	  		<td><img  title="点击刷新" src="../captcha.php" align="absbottom" onclick="this.src='../captcha.php?'+Math.random();"></img></td>
          	  	</tr>
                 <p>
            	<input type="submit" value="登录" onClick="return check(frmSearch)">
            	<input type="reset" value="重置">            	
                </p>
            </div>
            </div>           
	   	</div> 
	   	<div id="footer">
				<p>508设计工作室版权所有，本工作室保留最终解释权</p>
				<div id="foot">
					<ul>
						<li><a href="../about/about.php">关于我们</a></li>
						<li class="shu">丨</li>
						<li><a href="../contact/contact.php">联系我们</a></li>
						<li class="shu">丨</li>
						<li><a href="../notice/notice.php">负责声明</a></li>
						<li class="shu">丨</li>
						<li><a href="../advice/advice.php">意见反馈</a></li>
					</ul>
				</div>
		</div>
       </form>
</body>
</html>
