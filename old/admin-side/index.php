<?php
session_start();
if(!isset($_SESSION['user_email'])){
		header("location: login.php");
	}else{
header("location:dashboard.php");}
?>