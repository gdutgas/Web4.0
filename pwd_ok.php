<?php
session_start();
$newpwd=$_POST[pwd];
include("conn/conn.php");
$sql=mysql_query("update tb_user set password='$newpwd' where name='$_SESSION[name]'");
?>
<script language="javascript">alert("������ĳɹ�!");window.location.href="safequit.php";</script>		
