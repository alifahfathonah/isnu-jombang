

<?php
	include '../config/koneksi.php';

	$id = $_POST["id"];

    $query = "DELETE from kategori_info where id_kategori='$id'";

    mysqli_query($connect, $query);

    if($query){
      $data['sMessage'] = "success";
      echo json_encode($data);
    }else{
      $data['sMessage'] = "error";
      echo json_encode($data);
    }

	/*
	if ($_GET["id_anggota"]) {
		$id_anggota = $_GET['id_anggota'];
		$query="DELETE from anggota where id_anggota='$id_anggota'";
				mysqli_query($connect, $query);
	 
		header("location:data_anggota.php?pesan=hapus");
	}
	*/

	/*
	if ($_GET["id_post"]) {
		$id_post = $_GET['id_post'];
		$query="DELETE from info where id_info='$id_post'";
				mysqli_query($connect, $query);
	 
		header("location:post.php?pesan=hapus");
	}
	*/
	/*
	if ($_GET["id_kategori"]) {
	    $id_kategori = $_GET['id_kategori'];
	    $query="DELETE from kategori_info where id_kategori='$id_kategori'";
	        mysqli_query($connect, $query);
	   
	    $cek=mysqli_query($connect, $query);

	    if ($cek) {
	      header("location:kategori_post.php?pesan=hapus");
	    }
	  }*/
?>