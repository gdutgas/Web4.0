<?php
include("conn/conn.php");
$name=$_POST[txtUsername];
$pwd=$_POST[pwdPassword];
$email=$_POST[email];
$phone=$_POST[phone];

$sql=mysql_query("select * from tb_user where name ='$name'");
$info=mysql_fetch_array($sql);
if($info==true){
	echo "<script language='javascript'>alert('用户已被注册!');history.back();</script>";
}else{
	$sql=mysql_query("insert into tb_user (name,password,email,phone,admin) values('$name','$pwd','$email','$phone','0')");
	if($sql==true){
		echo "<script language='javascript'>alert('用户添加成功!');window.location='index.php';</script>";
	}else{
		echo "<script language='javascript'>alert('用户添加失败!');history.back();</script>";
	}
}
//strlen()
?>
