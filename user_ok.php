<?php
include("conn/conn.php");
$name=$_POST[txtUsername];
$pwd=$_POST[pwdPassword];
$email=$_POST[email];
$phone=$_POST[phone];

$sql=mysql_query("select * from tb_user where name ='$name'");
$info=mysql_fetch_array($sql);
if($info==true){
	echo "<script language='javascript'>alert('�û��ѱ�ע��!');history.back();</script>";
}else{

	if(strlen($pwd)>=6){
		$sql=mysql_query("insert into tb_user (name,password,email,phone,admin) values('$name','$pwd','$email','$phone','0')");
		if($sql==true){
			echo "<script language='javascript'>alert('�û���ӳɹ�!');window.location='index.php';</script>";
		}else{
			echo "<script language='javascript'>alert('�û����ʧ��!');history.back();</script>";
		}
	}else{
	echo "<script language='javascript'>alert('����Ӧ����6λ!');history.back();</script>";
	}
}
//strlen()
?>
