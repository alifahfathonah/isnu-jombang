<?php
	session_start();
	include '../config/koneksi.php';
	if(empty($_SESSION['admin'])){
	    header("location:login.php");
	}
	include 'public_part/header.php';
?>
<br>
	<div class="site-section bg-light">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-3">
		            <?php include 'public_part/menu_sidebar.php';?>
		         </div>
		         <div class="col-md-9">
		         		<div class="mb-5">
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-list-ul"></i> Data Anggota</h5>
				                <table class="table table-striped table-bordered" id="table_id">
              <thead>
                <tr>
                  <th><strong>No</strong></th>
                  <th><strong>Nama</strong></th>
                        <th><strong>Jenjang</strong></th>
                  <th><strong>Jurusan</strong></th>
                        <th><strong>PT / Universitas</strong></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                            include ('config/koneksi.php');
                    $no = 1;
                    $qTampil = mysqli_query($connect, "SELECT * FROM anggota");
                    foreach($qTampil as $row){
                  ?>

                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><a href="detail.php?id=<?php echo $row['id_anggota']; ?>"><?php echo $row['nama']; ?></a></td>
                            <td><?php echo $row['jenjang']; ?></td>
                              <td><?php echo $row['jurusan']; ?></td>
                            <td><?php echo $row['pt_univ']; ?></td>
                  </tr>

                  <?php
                    }
                  ?>
                </tbody>
            </table>
            <br>
            <a class="btn btn-warning btn-md" href='cetak.php'><i class="fa fa-print"></i> Cetak Data Anggota</a>
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