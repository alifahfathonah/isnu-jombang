<?php
	session_start();
	include ('../config/koneksi.php');

	$id 			= $_POST['fid'];
	$vid_user		= $_SESSION['id_user'];
	$vnama 			= $_POST['fnama'];
	$vno_ktp 		= $_POST['fno_ktp'];
	$vjenis_kelamin = $_POST['fjenis_kelamin'];
	$vtempat_lahir 	= $_POST['ftempat_lahir'];
	$vtgl_lahir 	= $_POST['ftgl_lahir'];
	$vdusun_desa 	= $_POST['fdusun_desa'];
	$vkecamatan 	= $_POST['fkecamatan'];
	$vkota 			= $_POST['fkota'];
	$vno_telepon 	= $_POST['fno_telepon'];
	$vjenjang 		= $_POST['fjenjang'];
	$vjurusan 		= $_POST['fjurusan'];
	$vpt_univ 		= $_POST['fpt_univ'];

	$qEdit 	= "UPDATE anggota SET nama='$vnama', no_ktp='$vno_ktp', jenis_kelamin='$vjenis_kelamin', tempat_lahir='$vtempat_lahir', tgl_lahir='$vtgl_lahir', dusun_desa='$vdusun_desa', kecamatan='$vkecamatan', kota='$vkota', no_telepon='$vno_telepon', jenjang='$vjenjang', jurusan='$vjurusan', pt_univ='$vpt_univ' WHERE id_user='$id'";
	$edit 	= mysqli_query($connect, $qEdit);
	
	if($edit){
		header('location:profil.php');
	}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal mengubah data'); window.location.href='profil.php'</script>");
	}
?>