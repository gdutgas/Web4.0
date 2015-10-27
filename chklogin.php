<?php
session_start();
$A_name=$_POST[txtUsername];          //接收表单提交的用户名
$A_pwd=$_POST[pwdPassword];            //接收表单提交的密码
$A_auth=$_POST[authnum];       //接收表单提交的验证码

class chkinput{                //定义类
   var $name; 
   var $pwd;
   var $auth;

   function chkinput($x,$y,$z){
     $this->name=$x;
     $this->pwd=$y;
	 $this->auth=$z;
    }

   function checkinput(){
     include("conn/conn.php");   		  //连接数据源    
	 if ($this->auth != $_SESSION[authnum_session]){
			echo "<script language='javascript'>alert('您输入的验证码错误，请重新输入！');window.location='login/login.php';</script>";  //后续修改为history.back()
			exit;     //退出checkinput()
			}	
     $sql=mysql_query("select * from tb_user where name='".$this->name."' and password='".$this->pwd."'",$conn);
     $info=mysql_fetch_array($sql);       //检索名称和密码是否正确
     if($info==false){                    //如果名称或密码不正确，则弹出相关提示信息
          echo "<script language='javascript'>alert('您输入的名称或密码错误，请重新输入！');history.back();</script>";
          exit;
       }
      else{                              //如果名称或密码正确，则弹出相关提示信息
          echo "<script>alert('登录成功!');window.location='index.php';</script>";
		 $_SESSION[name]=$info[name];
		 $_SESSION[pwd]=$info[password];
		 $_SESSION[admin]=$info[admin];
		 $_SESSION[superadmin]=$info[superadmin];
   }
 }
}
    $obj=new chkinput(trim($A_name),trim($A_pwd),trim($A_auth));      //创建对象
    $obj->checkinput();          				    //调用类
?>
