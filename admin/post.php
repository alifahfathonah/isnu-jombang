<?php
	include 'public_part/header.php';
?>
<br>
    <div class="page-content p-5" id="content">
        <div class="container">
          <ol class="breadcrumb default-color">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Post</li>
          </ol>
      		<div class="row">
		         <div class="col-md-12">
		         		<div class="mb-5">
                  <?php 
                    if(isset($_GET['pesan'])){
                      if($_GET['pesan']=="sukses"){
                        echo '
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                          <strong>Sukses!</strong> Menambah Post.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                              ';
                      }

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
                    }
                  ?>
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-book"></i> Post</h5>

				                <a class="btn btn-warning btn-md" href='tambah_post.php'><i class="fa fa-plus"></i> Tambah Post</a><hr>
				                <table class="table table-striped table-bordered table-responsive" id="table_id">
                          <thead>
                            <tr>
                              <th><strong>NO</strong></th>
                              <th><strong>JUDUL</strong></th>
                              <th><strong>TANGGAL</strong></th>
                              <th><strong>KATEGORI</strong></th>
                              <th><strong>OPSI</strong></th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                                $no = 1;
                                $qTampil = mysqli_query($connect, "
                                   SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori order by id_info desc");
                                foreach($qTampil as $row){
                              ?>

                              <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['judul']; ?></td>
                                <td><?php echo $row['tanggal']; ?></td>
                                <td><?php echo $row['nama_kategori']; ?></td>
                                <td>
                                  <a class="btn btn-success" href='edit-post.php?id_post=<?php echo $row['id_info']; ?>'><i class="fa fa-pen"></i></a><hr>
                                  <a class="btn btn-danger" href='aksi-delete.php?id_post=<?php echo $row['id_info']; ?>'><i class="fa fa-trash"></i></a>
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