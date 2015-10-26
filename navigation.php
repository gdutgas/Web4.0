<?php
session_start();
include("conn/conn.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="JS/menu.JS"></script>
<div class=menuskin id=popmenu
      onmouseover="clearhidemenu();highlightmenu(event,'on')"
      onmouseout="highlightmenu(event,'off');dynamichide(event)" style="Z-index:100;position:absolute;"></div>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="26" align="right"><a href="index.php" >主页</a>&nbsp;&nbsp;&nbsp;当前用户：<?php echo $_SESSION[name];?>&nbsp;&nbsp;&nbsp;<?php if($_SESSION[admin]==1){?><a href="user.php" >用户查看</a> <?php } ?>&nbsp;&nbsp;&nbsp;<a href="pwd_Modify.php" >更改密码</a>&nbsp;&nbsp;&nbsp;<a href="safequit.php" >注销</a></td>
      </tr>
    </table>
	</td>
  </tr>
</table> 
