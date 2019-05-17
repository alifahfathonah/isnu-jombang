<?php
	include "../config/koneksi.php";
	$id = $_GET['id'];
	$query = "DELETE FROM data_sarjana WHERE id_sarjana='$id'";
	mysqli_query($connect, $query);
	header('location:data-sarjana.php');
?>