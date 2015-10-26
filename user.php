<?php 
session_start();
include("conn/conn.php");
?>
<?php if($_SESSION[admin]==0){?>
<script language="javascript">alert("没有权限!");window.location.href="index.php";</script>	
 <?php } ?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	<?php include("navigation.php");?>
	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">当前位置：系统设置 &gt; 用户查看 &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
<?php
$sql=mysql_query("select id,name,email,phone,admin from tb_user");
$info=mysql_fetch_array($sql);
if($info==false){
?>
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">暂无用户信息！</td>
            </tr>
          </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <a href="user_add.php">添加用户</a> </td>
  </tr>
</table>
 <?php
}else{
 ?>
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84%">&nbsp;      </td>
<td width="16%">
      <a href="user_add.php">添加用户</a> </td>
  </tr>
</table>  
  <table width="91%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="6%">用户id</td>
    <td width="12%">用户名称</td>
    <td width="12%">邮箱</td>
    <td width="12%">联系电话</td>
    <td width="11%">是否管理员</td>
    <td width="11%">XXX</td>
    <td width="8%">XXX</td>
    <td width="28%">XXX</td>
  </tr>
 <?php if($_SESSION[admin]==1){
do{?> 
  <tr>
    <td style="padding:5px;"><?php echo $info[id];?></td>
    <td style="padding:5px;"><?php echo $info[name];?></td>
	<td style="padding:5px;"><?php echo $info[email];?></td>
	<td style="padding:5px;"><?php echo $info[phone];?></td>
	<td style="padding:5px;"><?php echo $info[admin];?></td>
	<td style="padding:5px;"><?php echo "";?></td>
    <td align="center"><a href="#" onClick="window.open('user_modify.php?id=<?php echo $info[id]; ?>','','width=292,height=175')">**权限设置</a></td>
    <?php if($_SESSION[superadmin]==1||$info[admin]==0){?>
	<td align="center"><a href="user_del.php?id=<?php echo $info[id];?>">删除</a></td> 
	<?php }?>
	
  </tr>
<?php
  }while($info=mysql_fetch_array($sql));
  }
}
?>  
</table></td>
      </tr>
    </table>
</td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>