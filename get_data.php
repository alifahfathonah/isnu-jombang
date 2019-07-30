<?php  
 include 'config/koneksi.php';
 if(isset($_GET['offset']) && isset($_GET['limit'])) {
  $limit = $_GET['limit'];
  $offset = $_GET['offset'];


  $data = mysqli_query($connect,"SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori LIMIT {$limit} OFFSET {$offset}");

  while($row=mysqli_fetch_array($data)) {
  ?>
                  
                <div class="d-block d-md-flex listing overflow zoom">
                  <a href="listings-single.html" class="img d-block " style="background-image: url('admin/img/<?php echo $row['img']; ?>')"></a>
                  <div class="lh-content">

                    <h3>
                      <a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>"><?php echo $row['judul']; ?></a>
                    </h3>

                    <p><?php echo substr($row['isi'], 0,160); ?>...</p>
                
                    <a href="kategori.php?kategori=<?php echo $row['kategori']; ?>">
                      <span class="category"><?php echo $row['nama_kategori']; ?></span>
                    </a>

                    <small style="margin-left: 15px;">
                      <i class="fas fa-calendar-alt"></i> <?php echo $row['tanggal']; ?>
                    </small>
                  </div>
                </div>
               

  <?php
  }
 }
?> 