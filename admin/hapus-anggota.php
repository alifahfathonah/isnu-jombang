<?php
	include ('../config/koneksi.php');
	$id = $_GET['id'];
	$qDelete = "DELETE FROM anggota WHERE id='$id'";
	mysqli_query($connect, $qDelete);
	header('location:anggota.php');
?>