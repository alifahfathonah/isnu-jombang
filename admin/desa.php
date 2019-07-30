<?php
  session_start();
  include '../config/koneksi.php';
  if(empty($_SESSION['admin'])){
      header("location:login.php");
  }
?>

<?php
include '../config/koneksi.php';
$id_kecamatan = $_POST['id_kecamatan'];

$qTampil = mysqli_query($connect, "SELECT * FROM desa where id_kecamatan='$id_kecamatan'");
echo "<option selected>-- Pilih Desa --</option>";

while ($row = mysqli_fetch_array($qTampil)) {
	echo '<option value="'.$row['id'].'">'.$row['desa'].'</option>';
}

?>