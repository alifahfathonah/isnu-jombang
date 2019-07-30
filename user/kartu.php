<?php
	session_start();
	include '../config/koneksi.php';
	if(empty($_SESSION['username'])){
	    header("location:../login/login.php");
	}
?>

<!DOCTYPE html> 
<html>
	<head>
		<title>Kartu Nama</title>
		 
		<link rel="stylesheet" href="../fonts/icomoon/style.css">

	    <link rel="stylesheet" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/magnific-popup.css">
	    <link rel="stylesheet" href="../css/jquery-ui.css">
	    <link rel="stylesheet" href="../css/owl.carousel.min.css">
	    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

	    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

	    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

	    <link rel="stylesheet" href="../css/aos.css">
	    <link rel="stylesheet" href="../css/rangeslider.css">

	    <link rel="stylesheet" href="../css/style.css">
	    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

	    <style type="text/css">
			td {padding: 10px; padding-left: 10px;}
			table {margin: auto;margin-top: 90px;}
		</style>
	</head> 
	<body>
		<table border="0" width="600" cellpadding="0" cellspacing="0">
			<tr style="background-color: #3cd879;" >
				<td style="margin-left: 10px;"><img src="../images/header.png" width="75"></td>
				<td colspan="3" align="center">
					<h3>Kartu Anggota ISNU Jombang<br>
						Tahun 2019/2020
					</h3>
				</td>
			</tr>
			<?php
			    include ('../config/koneksi.php');
				$username = $_SESSION['username'];
				$qTampil = mysqli_query($connect, "

				SELECT A.*,B.*,C.*,D.* FROM anggota AS A 

				INNER JOIN desa AS B ON A.dusun_desa = B.id
				INNER JOIN kecamatan AS C ON A.kecamatan = C.id
				INNER JOIN universitas AS D ON A.pt_univ = D.id

				WHERE username='$username'");
				foreach($qTampil as $row){
			?>
			<tr bgcolor="#e7e7e7">
				<td width="50"><b>Nama</b></td>
				<td width="300">: <?php echo $row['nama']; ?></td>
				<td rowspan="4" style="text-align: center;"><img src="img/<?php echo $row['img'];?>" width="125" class="img-responsive"></td>
			</tr>
			<tr bgcolor="#e7e7e7">
				<td><b>Alamat </b></td>
				<td>: <?php echo $row['desa']; ?>, <?php echo $row['kecamatan']; ?>, <?php echo $row['kota']; ?></td>
			</tr>
			<tr bgcolor="#e7e7e7">
				<td><b>Jenjang</b></td>
				<td>: <?php echo $row['jenjang']; ?> <?php echo $row['jurusan']; ?></td>
			</tr>
			<tr bgcolor="#e7e7e7">
				<td><b>Lulusan</b></td>
				<td>: <?php echo $row['universitas']; ?></td>
			</tr>

			<tr bgcolor="#e7e7e7">
				<td></td>
				<td></td>
				<td style="text-align: center; font-size: 13px;">Ketua ISNU Jombang</td>
			</tr>
			<tr bgcolor="#e7e7e7">
				<td><br></td>
				<td></td>
				<td style="text-align: center; font-size: 13px;">H. Abdul Hanan Majdy, S.Kom</td>
			</tr>
			
			<?php } ?>
			<tr style="background-color: #3cd879;">
				<td colspan="3" align="center">Created By : ISNU JOMBANG</td>
			</tr>
		</table>
	
    	<script>
		    window.onload = function () {
		        this.print();
		    }
	    </script>
	</body> 
	</html>