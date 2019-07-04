<?php
	include '../config/koneksi.php';

	session_start();

	$username 	= $_POST['username'];
	$password 	= md5($_POST['password']);

	$qLogin 	= mysqli_query($connect, "SELECT * FROM anggota WHERE username='$username' AND password='$password'");
	$row 		= mysqli_num_rows($qLogin);
	
	if($row > 0){
		$login = mysqli_fetch_assoc($qLogin);
		
			$_SESSION['username'] = $username;
			$_SESSION['user'] = "user";

			header("location:../user/profil.php");
			
	}else{
		header("location:login.php?pesan=gagal");
	}
?>