<?php
//连接数据库，连接成功返回true，否则返回false
function db_connect(){
	$result= new mysqli('localhost','info','info','infotheory');
	if(!$result){
		return false;
	}else {
		return $result;
	}
}
?>