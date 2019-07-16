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

                                  <button class="btn btn-danger delete-data" data-id="<?php echo $row['id_info']; ?>"><i class="fa fa-trash"></i>
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
              id_post: id
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