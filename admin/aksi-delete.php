<?php
  session_start();
  include '../config/koneksi.php';
  if(empty($_SESSION['admin'])){
      header("location:login.php");
  }
?>

<?php
	include '../config/koneksi.php';
	//fungsi hapus kategori
	if (isset($_POST["id_kategori"])) {
		# code...

		$id = $_POST["id_kategori"];

	    $query = "DELETE from kategori_info where id_kategori='$id'";

	    mysqli_query($connect, $query);

	    if($query){
	      $data['sMessage'] = "success";
	      echo json_encode($data);
	    }else{
	      $data['sMessage'] = "error";
	      echo json_encode($data);
	    }
	}
	// fungsi hapus post
	if (isset($_POST["id_post"])) {
		# code...

		$id = $_POST["id_post"];

	    $query = "DELETE from info where id_info='$id'";

	    mysqli_query($connect, $query);

	    if($query){
	      $data['sMessage'] = "success";
	      echo json_encode($data);
	    }else{
	      $data['sMessage'] = "error";
	      echo json_encode($data);
	    }
	}
	// fungsi hapus anggota
	if (isset($_POST["id_anggota"])) {
		# code...

		$id = $_POST["id_anggota"];

	    $query = "DELETE from anggota where id_anggota='$id'";

	    mysqli_query($connect, $query);

	    if($query){
	      $data['sMessage'] = "success";
	      echo json_encode($data);
	    }else{
	      $data['sMessage'] = "error";
	      echo json_encode($data);
	    }
	}
	?>