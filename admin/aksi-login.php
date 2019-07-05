<?php
	include '../config/koneksi.php';

	session_start();

	$username 	= $_POST['username'];
	$password 	= md5($_POST['password']);

	$qLogin 	= mysqli_query($connect, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
	$row 		= mysqli_num_rows($qLogin);
	
	if($row > 0){
		$login = mysqli_fetch_assoc($qLogin);
			
			$_SESSION['admin'] = $username;
			$_SESSION['admin'] = "admin";

			header("location:index.php");
			
	}else{
		header("location:login.php?pesan=gagal");
	}
?>