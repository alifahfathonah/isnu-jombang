<?php
	include ('../config/koneksi.php');
	
	$vnama = $_POST['fnama'];
	$vno_ktp = $_POST['fno_ktp'];
	$vjenis_kelamin = $_POST['fjenis_kelamin'];
	$vtempat_lahir = $_POST['ftempat_lahir'];
	$vtgl_lahir = $_POST['ftgl_lahir'];
	$vdusun_desa = $_POST['fdusun_desa'];
	$vkecamatan = $_POST['fkecamatan'];
	$vkota = $_POST['fkota'];
	$vno_telepon = $_POST['fno_telepon'];
	$vjenjang = $_POST['fjenjang'];
	$vjurusan = $_POST['fjurusan'];
	$vpt_univ = $_POST['fpt_univ'];

	$qTambah = "INSERT INTO anggota VALUES('','$vnama','$vno_ktp','$vjenis_kelamin','$vtempat_lahir','$vtgl_lahir','$vdusun_desa','$vkecamatan','$vkota','$vno_telepon','$vjenjang','$vjurusan','$vpt_univ')";
	$tambah = mysqli_query($connect, $qTambah);
	if($tambah){
		header('location:anggota.php');
	}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal menambahkan data'); window.location.href='anggota.php'</script>");
	}
?>