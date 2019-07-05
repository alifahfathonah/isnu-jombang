<?php
	include '../config/koneksi.php';
	$id = $_GET['id'];
	$query="DELETE from anggota where id_anggota='$id'";
			mysqli_query($connect, $query);
 
	header("location:data_anggota.php?pesan=hapus");
?>