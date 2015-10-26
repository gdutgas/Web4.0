<?php 
session_start();
if($_SESSION[admin]==0){?>
<script language="javascript">alert("没有权限!");window.location.href="project.php";</script>	
 <?php } ?>
<html>
<head>
<title>添加用户</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="CSS/style.css" rel="stylesheet">
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
		alert("您两次输入的用户密码不一致，请重新输入!");form1.pwdPassword1.focus();return false;
	}
}
</script>
<body>
<table width="292" height="175" border="0" cellpadding="0" cellspacing="0" background="Images/subBG.jpg">
  <tr>
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="3%" height="25">&nbsp;</td>
        <td width="94%">&nbsp;</td>
        <td width="3%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><table width="100%" height="131"  border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" valign="top">	<form name="form1" method="post" action="user_ok.php">
	<table height="123"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="97" height="30" align="center">用户名称：</td>
        <td width="178">
          <input name="txtUsername" type="text">        </td>
      </tr>
      <tr>
        <td height="28" align="center">用户密码：</td>
        <td><input name="pwdPassword" type="password" id="pwd"></td>
      </tr>
      <tr>
        <td height="28" align="center">确认密码：</td>
        <td><input name="pwdPassword1" type="password" id="pwd1"></td>
      </tr>
	  <tr>
        <td height="28" align="center">邮箱：</td>
        <td><input name="email" type="text" id="email"></td>
      </tr>
	  <tr>
        <td height="28" align="center">联系电话：</td>
        <td><input name="phone" type="text" id="phone"></td>
      </tr>
      <tr>
        <td height="37" align="center">&nbsp;</td>
        <td><input name="submit" type="submit" class="btn_grey" value="保存" onClick="return check(form1)">
&nbsp;
<input name="submit2" type="button" class="btn_grey" value="关闭" onClick="window.close();"></td>
      </tr>
    </table>
	</form></td>
          </tr>
        </table></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
