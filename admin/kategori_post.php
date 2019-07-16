<?php
	include 'public_part/header.php';
?>
<br>
	 <div class="page-content p-5" id="content">
        <div class="container">
          <ol class="breadcrumb default-color">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Kategori Post</li>
          </ol>
      		<div class="row">
		         <div class="col-md-12">
		         		<div class="mb-5">


                  <?php 
                    
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
                  ?>

			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-list-ul"></i> Data Anggota</h5>
                          <div class="col-md-12">
                          <form method="post">
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
                          <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="table_id">
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
                                    <button class="btn btn-danger delete-data" data-id="<?php echo $row['id_kategori']; ?>">
                                    <i class="fa fa-trash"></i></a>
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
	 </div>

   <script>
      //delete
      jQuery("body").on("click", ".delete-data", function() {
        var id = jQuery(this).attr("data-id");

        swal({
          title: "APAKAH KAMU YAKIN ?",
          text: "INGIN MENGHAPUS DATA INI!",
          icon: "warning",
          buttons: [
            'TIDAK',
            'YA'
          ],
          dangerMode: true,
        }).then(function(isConfirm) {
          if (isConfirm) {

            //ajax delete
            jQuery.ajax({
              url:  "aksi-delete.php",
              data:   {
                id_kategori: id
              },
              dataType: 'JSON',
              type: 'POST',
              success: function (response) {
                if (response.sMessage == "success") {
                  swal({
                    title: 'BERHASIL!',
                    text: 'DATA BERHASIL DIHAPUS!',
                    icon: 'success',
                    timer: 1000,
                    showConfirmButton: false,
                    showCancelButton: false,
                    buttons: false,
                  }).then(function() {
                    location.reload();
                  });
                }else{
                  swal({
                    title: 'GAGAL!',
                    text: 'DATA GAGAL DIHAPUS!',
                    icon: 'error',
                    timer: 1000,
                    showConfirmButton: false,
                    showCancelButton: false,
                    buttons: false,
                  }).then(function() {
                    location.reload();
                  });
                }
              }
            });

          } else {
            return true;
          }
        })
      })

      //insert kategori
      function berhasil() {
        swal({
            title: "BERHASIL",
            text: "Data Telah ditambahkan",
            icon: "success",
            buttons: [false, "OK"],
          }).then(function() {
            window.location.href="kategori_post.php";
          });
      }
   </script>
                          


<?php 
	include 'public_part/footer.php';

  //fungsi tambah kategori
  if ($_POST["submit_kategori"]) {
      
      $nama_kategori  = $_POST['nama_kategori'];

        $query="INSERT INTO kategori_info SET nama_kategori='$nama_kategori'";
        $cek=mysqli_query($connect, $query);

      if ($cek) {
        echo '
          <script>
            berhasil();
          </script>'; 
          exit();
      }
  }
?>

            