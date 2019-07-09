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
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> Menghapus kategori.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                              ';
                      }
                      if($_GET['pesan']=="sukses"){
                        echo '
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> Menambah kategori.
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
                          <div class="col-md-12">
                          <form method="post" action="aksi-tambah.php">
                            <div class="row align-items-center">
                              <input type="hidden" name="id" class="form-control rounded">

                              <div class="col-lg-6">
                                  <label></label>
                                  <input type="text" name="nama_kategori" class="form-control rounded" placeholder="Masukkan Nama Kategori" required>
                              </div>

                              <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                                <br>
                                <input type="submit" name="submit_kategori" class="btn btn-success btn-block rounded" value="Tambah Kategori">
                              </div>                              
                            </div>
                          </form>
                        </div>
                        <hr>
                        <div class="col-md-12">
                          <table class="table table-striped table-bordered table-responsive" id="table_id">
                            <thead>
                              <tr>
                                <th><strong>No</strong></th>
                                <th><strong>Nama Kategori</strong></th>
                                <th><strong>Opsi</strong></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php
                                          include ('config/koneksi.php');
                                  $no = 1;
                                  $qTampil = mysqli_query($connect, "SELECT * FROM kategori_info order by id_kategori desc");
                                  foreach($qTampil as $row){
                                ?>

                                <tr>
                                  <td><?php echo $no++; ?></td>
                                  <td><?php echo $row['nama_kategori']; ?></td>
                                  <td>
                                    <a class="btn btn-danger" href='aksi-delete.php?id_kategori=<?php echo $row['id_kategori']; ?>'><i class="fa fa-trash"></i></a>
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
	 </div>

<?php 
	include 'public_part/footer.php';
?>