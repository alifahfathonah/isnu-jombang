<?php 
	// mengaktifkan session pada php
	session_start();
	 
	// menghubungkan php dengan koneksi database
	include 'db/koneksi.php';
	 
	// menangkap data yang dikirim dari form login
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	 
	// menyeleksi data user dengan username dan password yang sesuai
	$login = mysqli_query($connect,"SELECT * FROM users WHERE username='$username' AND password='$password'");

	// menghitung jumlah data yang ditemukan
	$cek = mysqli_num_rows($login);
	 
	// cek apakah username dan password di temukan pada database
	if($cek > 0){
	 
		$data = mysqli_fetch_assoc($login);
	 
		// cek jika user login sebagai admin
		if($data['level']=="admin"){
	 
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			// alihkan ke halaman dashboard admin
			header("location:admin-page.php");
	 
		// cek jika user login sebagai user
		}else if($data['level']=="user"){
			// buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "user";
			// alihkan ke halaman dashboard user
			header("location:user-page.php");
		
		}else{
	 		// alihkan ke halaman login kembali
			header("location:login.php?pesan=gagal");
		}	
	}else{
		header("location:login.php?pesan=gagal");
	}
?>