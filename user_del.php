<?php
include("conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("delete from tb_user where id='$id'");
if($sql==true){
echo "<script language=javascript>alert('����Աɾ���ɹ���');history.back();</script>";
}
else{
echo "<script language=javascript>alert('����Աɾ��ʧ�ܣ�');history.back();</script>";
}
?>

