<?php
session_start();
$A_name=$_POST[txtUsername];          //���ձ��ύ���û���
$A_pwd=$_POST[pwdPassword];            //���ձ��ύ������

class chkinput{                //������
   var $name; 
   var $pwd;

   function chkinput($x,$y){
     $this->name=$x;
     $this->pwd=$y;
    }

   function checkinput(){
     include("conn/conn.php");   		  //��������Դ    
     $sql=mysql_query("select * from tb_user where name='".$this->name."' and password='".$this->pwd."'",$conn);
     $info=mysql_fetch_array($sql);       //�������ƺ������Ƿ���ȷ
     if($info==false){                    //������ƻ����벻��ȷ���򵯳������ʾ��Ϣ
          echo "<script language='javascript'>alert('����������ƻ�����������������룡');history.back();</script>";
          exit;
       }
      else{                              //������ƻ�������ȷ���򵯳������ʾ��Ϣ
          echo "<script>alert('��¼�ɹ�!');window.location='index.php';</script>";
		 $_SESSION[name]=$info[name];
		 $_SESSION[pwd]=$info[password];
		 $_SESSION[admin]=$info[admin];
		 $_SESSION[superadmin]=$info[superadmin];
   }
 }
}
    $obj=new chkinput(trim($A_name),trim($A_pwd));      //��������
    $obj->checkinput();          				    //������
?>
