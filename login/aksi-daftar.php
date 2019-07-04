<?php
	include '../config/koneksi.php';

	$username= $_POST['username'];
	$password= md5($_POST['password']);
    $img = $_POST['img'];

	$qCekUser   = mysqli_query($connect, "SELECT * FROM anggota WHERE username='$username'");
    $row        = mysqli_num_rows($qCekUser);

    if ($row > 0) {
    	echo '<script language="javascript">alert ("Username sudah digunakan!"); window.location="daftar.php";</script>';
        exit();
        
    }else{
        $qDaftar = "INSERT INTO anggota (username, password, img) VALUES('$username', '$password', '$img')";
        if(mysqli_query($connect, $qDaftar)){
            header("location:login.php?pesan=sukses");
    	}
    }

	

?>