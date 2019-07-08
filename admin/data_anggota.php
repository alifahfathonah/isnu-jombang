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
                  <?php 
                    if(isset($_GET['pesan'])){
                      if($_GET['pesan']=="hapus"){
                        echo '
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> Menghapus anggota.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                              ';
                      }
                      if($_GET['pesan']=="sukses"){
                        echo '
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> Menambah anggota.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                              ';
                      }
                    }
                  ?>

			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-list-ul"></i> Data Anggota</h5>
                        <a class="btn btn-success btn-md" href='tambah_anggota.php'><i class="fa fa-user-plus"></i> Tambah Anggota</a>

                        <a class="btn btn-warning btn-md" href='cetak.php'><i class="fa fa-print"></i> Cetak Data Anggota</a><hr>
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
                                        include ('config/koneksi.php');
                                $no = 1;
                                $qTampil = mysqli_query($connect, "SELECT * FROM anggota order by id_anggota desc");
                                foreach($qTampil as $row){
                              ?>

                              <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['jenjang']; ?></td>
                                <td><?php echo $row['jurusan']; ?></td>
                                <td><?php echo $row['pt_univ']; ?></td>
                                <td>
                                  <a class="btn btn-success" href='edit-anggota.php?id_anggota=<?php echo $row['id_anggota']; ?>'><i class="fa fa-edit"></i></a><hr>
                                  <a class="btn btn-danger" href='aksi-delete.php?id_anggota=<?php echo $row['id_anggota']; ?>'><i class="fa fa-trash"></i></a>
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