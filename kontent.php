<?php
error_reporting(0);
include 'config/koneksi.php';
$no = $_POST['getresult'];

$qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori where not id_kategori='1' order by id_info desc limit $no,4");
foreach($qTampil as $row){
?>

              <div class="col-lg-6">
                <div class="d-block d-md-flex listing vertical">
                  <a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>" class="img d-block" style="background-image: url('admin/img/<?php echo $row['img'];?>')"></a>
                  <div class="lh-content">
                    <span class="category"><?php echo $row['nama_kategori'];?></span>
                    
                      <i class="icon-calendar"></i> 
                      <span class="review"><?php echo $row['tanggal']; ?></span>
                    
                    <h3><a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>"><?php echo $row['judul']; ?></a></h3>
                    <address><?php echo substr($row['isi'], 0,160); ?>...</address>
                    
                  </div>
                </div>
              </div>
<?php 
  }
?>