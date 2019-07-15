<?php
	include 'public_part/header.php';
?>
<br>
  <div class="page-content p-5" id="content">
      <div class="container">
        <ol class="breadcrumb default-color">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Data Anggota</li>
        </ol>

      		<div class="row">
		         <div class="col-md-12">
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
                                  <a class="btn btn-success" href='edit-anggota.php?id_anggota=<?php echo $row['id_anggota']; ?>'><i class="fa fa-pen"></i></a><hr>
                                  <a class="btn btn-danger" href='data_anggota.php?id_anggota=<?php echo $row['id_anggota']; ?>'><i class="fa fa-trash"></i></a>
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

  <script type="text/javascript">
    function hapus() {
                    swal({
                        title: "Apakah Anggota Akan Dihapus?",
                        text: "Data anggota akan di hapus",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                      })
                          

                      .then((willDelete) => {
                        if (willDelete) {
                          swal("Sukses! Anggota berhasil dihapus", {
                            icon: "success",
                          })
                          window.location.href="data_anggota.php";      
                        } else {
                          swal("Data anggota batal dihapus!");
                          exit();
                        }

                      });
                }
  </script>

<?php 
	include 'public_part/footer.php';

  if ($_GET["id_anggota"]) {
    $id_anggota = $_GET['id_anggota'];
    $query="DELETE from anggota where id_anggota='$id_anggota'";
        mysqli_query($connect, $query);
   
    echo "<script>hapus();</script>";
  }
?>