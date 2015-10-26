<?php
session_start();
if(!isset($_SESSION['name'])){
	echo "<script>window.location.href='login/login.php';</script>";
}
?>
