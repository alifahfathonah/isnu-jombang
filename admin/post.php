<?php
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
				                <h5 class="card-title"><i class="fa fa-book"></i> Post</h5>

				                <a class="btn btn-warning btn-md" href='cetak.php'><i class="fa fa-plus"></i> Tambah Post</a><hr>
				                <table class="table table-striped table-bordered table-responsive" id="table_id">
                          <thead>
                            <tr>
                              <th><strong>No</strong></th>
                              <th><strong>Nama</strong></th>
                              <th><strong>Jenjang</strong></th>
                              <th><strong>Jurusan</strong></th>
                              <th><strong>PT / Universitas</strong></th>
                              <th><strong>Opsi</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                                $no = 1;
                                $qTampil = mysqli_query($connect, "SELECT * FROM info");
                                foreach($qTampil as $row){
                              ?>

                              <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['judul']; ?></td>
                                <td><?php echo $row['tanggal']; ?></td>
                                <td><?php echo $row['jurusan']; ?></td>
                                <td><?php echo $row['pt_univ']; ?></td>
                                <td>
                                  <a class="btn btn-success" href='edit-anggota.php?id_anggota=<?php echo $row['id_anggota']; ?>'><i class="fa fa-edit"></i></a><hr>
                                  <a class="btn btn-danger" href='aksi-delet-anggota.php?id=<?php echo $row['id_anggota']; ?>'><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>

                              <?php
                                }
                              ?>
                            </tbody>
                        </table>
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