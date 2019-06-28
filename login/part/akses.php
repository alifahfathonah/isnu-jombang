<?php
	session_start();

	if(isset($_SESSION['username'])){
	 	if(isset($_SESSION['admin'])){
	 		header('location:../admin/index.php');
		}else if(isset($_SESSION['user'])){
		 	header('location:../user/index.php');
		}
	}else{
		header('location:../login/index.php');
	}
?>