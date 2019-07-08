<?php
	include '../config/koneksi.php';

	if ($_GET["id_anggota"]) {
		$id_anggota = $_GET['id_anggota'];
		$query="DELETE from anggota where id_anggota='$id_anggota'";
				mysqli_query($connect, $query);
	 
		header("location:data_anggota.php?pesan=hapus");
	}

	if ($_GET["id_post"]) {
		$id_post = $_GET['id_post'];
		$query="DELETE from info where id_info='$id_post'";
				mysqli_query($connect, $query);
	 
		header("location:post.php?pesan=hapus");
	}
	
?>