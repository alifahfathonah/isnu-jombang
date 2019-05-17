<?php
	include ('../config/koneksi.php');
	
	$nama 			= $_POST['nama'];
	$no_ktp 		= $_POST['no_ktp'];
	$jenis_kelamin 	= $_POST['jenis_kelamin'];
	$tempat_lahir 	= $_POST['tempat_lahir'];
	$tanggal_lahir 	= $_POST['tanggal_lahir'];
	$dusun_desa 	= $_POST['dusun_desa'];
	$kecamatan 		= $_POST['kecamatan'];
	$kota 			= $_POST['kota'];
	$nomor_telepon 	= $_POST['nomor_telepon'];
	$jenjang 		= $_POST['jenjang'];
	$jurusan 		= $_POST['jurusan'];
	$pt_univ 		= $_POST['pt_univ'];

	$qTambah = "INSERT INTO anggota (nama, no_ktp, jenis_kelamin, tempat_lahir, tanggal_lahir, dusun_desa, kecamatan, kota, nomor_telepon, jenjang, jurusan, pt_univ) VALUES('$nama', '$no_ktp', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$dusun_desa', '$kecamatan', '$kota', '$nomor_telepon', '$jenjang', '$jurusan', '$pt_univ')";
	$tambah = mysqli_query($connect, $qTambah);
	if($tambah){
		header('location:anggota.php');
	}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal menambahkan data'); window.location.href='tambah-anggota.php'</script>");
	}
?>