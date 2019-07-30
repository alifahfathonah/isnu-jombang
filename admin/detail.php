<?php
	
	include 'public_part/header.php';
?>

<br>
    <div class="page-content p-5" id="content">
      	<div class="container">
      		<ol class="breadcrumb default-color">
	          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
	          <li class="breadcrumb-item"><a href="data_anggota.php">Data Anggota</a></li>
	          <li class="breadcrumb-item active">Detail Data Anggota</li>
	        </ol>
      		<div class="row">
		        <div class="col-md-8">
		         	<div class="mb-5">
			            <div class="d-block d-md-flex listing">
			                <div class="lh-content">
			                	<table class="table table-striped">
										<thead>
										<?php
											$id = $_GET['id'];
											$qTampil = mysqli_query($connect, "

											SELECT A.*,B.*,C.*,D.* FROM anggota AS A 

											INNER JOIN desa AS B ON A.dusun_desa = B.id
											INNER JOIN kecamatan AS C ON A.kecamatan = C.id
											INNER JOIN universitas AS D ON A.pt_univ = D.id

											WHERE id_anggota='$id'");


											  	foreach($qTampil as $row){
										?>
											<tr>
												<th><strong>Nama : </strong></th>
												<th><?php echo $row['nama']; ?></th>
											</tr>
											<tr>
												<th><strong>No. KTP : </strong></th>
												<th><?php echo $row['no_ktp']; ?></th>
											</tr>
											<tr>
												<th><strong>Jenis Kelamin : </strong></th>
												<th><?php echo $row['jenis_kelamin']; ?></th>
											</tr>
											<tr>
												<th><strong>Tempat Lahir : </strong></th>
												<th><?php echo $row['tempat_lahir']; ?></th>
											</tr>
											<tr>
												<th><strong>Tanggal Lahir : </strong></th>
												<th><?php echo $row['tgl_lahir']; ?></th>
											</tr>
											<tr>
												<th><strong>Desa / Dusun : </strong></th>
												<th><?php echo $row['desa']; ?></th>
											</tr>
											<tr>
												<th><strong>Kecamatan : </strong></th>
												<th><?php echo $row['kecamatan']; ?></th>
											</tr>
											<tr>
												<th><strong>Kota : </strong></th>
												<th><?php echo $row['kota']; ?></th>
											</tr>
											<tr>
												<th><strong>No. Telpon : </strong></th>
												<th><?php echo $row['no_telepon']; ?></th>
											</tr>
											<tr>
												<th><strong>Jenjang : </strong></th>
												<th><?php echo $row['jenjang']; ?></th>
											</tr>
											<tr>
												<th><strong>Jurusan : </strong></th>
												<th><?php echo $row['jurusan']; ?></th>
											</tr>
											<tr>
												<th><strong>PT / Universitas : </strong></th>
												<th><?php echo $row['universitas']; ?></th>
											</tr>

										<?php } ?>

										</thead>

								</table>
								<a class="btn btn-success btn-md" href='edit-anggota.php?id_anggota=<?php echo $row['id_anggota']; ?>'><i class="fa fa-edit"></i> Edit Profil</a>
			                </div>
			            </div>
			        </div>
			    </div>
			    <div class="col-md-4">
		            <div class="mb-5">
			            <div class="d-block d-md-flex listing vertical">
			            	<div class="card hovercard">
				                <div class="cardheader">

				                </div>
				                <?php
									$id = $_GET['id'];
									$qTampil = mysqli_query($connect, "
											SELECT A.*,B.*,C.*,D.* FROM anggota AS A 

											INNER JOIN desa AS B ON A.dusun_desa = B.id
											INNER JOIN kecamatan AS C ON A.kecamatan = C.id
											INNER JOIN universitas AS D ON A.pt_univ = D.id

											WHERE id_anggota='$id'");
										foreach($qTampil as $row){
											$img = $row['img'];
								?>
				                <div class="avatar">
				                	<?php
				                		if ($img > 0) {
				                			echo '<img src="../user/img/'.$row['img'].'">';
				                		}else{
				                			echo '<img src="../images/avatar.png">';
				                		}
				                	?>
				                    
				                </div>
				                <div class="info">
				                    <div class="title">
				                        <h6><?php echo $row['nama']; ?></h6>
				                    </div>
				                    <div class="desc"><?php echo $row['desa'];
										echo ', ';
										echo $row['kecamatan'];
										echo ', ';
										echo $row['kota']; ?>
									</div><hr>
									
									
				                </div>
				                <?php
				                	}
				                	?>
				            </div>

			            </div>   
		            </div>
		         </div>	
			</div>
		</div>
	</div>

<?php 
	include 'public_part/footer.php';
?>