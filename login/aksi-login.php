<?php 
	session_start();
	include ('../config/koneksi.php');	

	$username 	= $_POST['username'];
	$password 	= md5($_POST['password']);
	
	$qLogin 	= mysqli_query($connect, "SELECT * FROM users WHERE username='$username' AND password='$password'");
	$row 		= mysqli_num_rows($qLogin);
	
	if($row > 0){
		$login = mysqli_fetch_assoc($qLogin);
		if($login['level']=="admin"){
			$_SESSION['username'] = $username;
			$_SESSION['admin'] = "admin";

			header("location:../admin/dashboard.php");
		}else if($login['level']=="user"){
			$_SESSION['username'] = $username;
			$_SESSION['user'] = "user";

			header("location:../index.php");
		}else{
			header("location:index.php?pesan=gagal");
		}	
	}else{
		header("location:index.php?pesan=gagal");
	}
?>