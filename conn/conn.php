<?php
     $conn=mysql_connect("localhost","root","root") or die("���ݿ���������Ӵ���".mysql_error());
     mysql_select_db("infotheory",$conn) or die("���ݿ���ʴ���".mysql_error());
     mysql_query("set names utf-8");
?>