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
                                  <button class="btn btn-danger delete-data" data-id="<?php echo $row['id_anggota']; ?>"><i class="fa fa-trash"></i>
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
              id_anggota: id
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
   </script>

<?php 
	include 'public_part/footer.php';
?>