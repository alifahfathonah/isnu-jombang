<?php include 'public_part/header.php'; ?>
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bg_isnu.jpg); min-height: 300px;" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-0" style="margin-bottom: 150px;">
              <div class="col-md-8 text-center">
                <h1>INFO ISNU JOMBANG</h1>
                <p class="mb-0">Ikatan Sarjana Nahdlatul Ulama Jombang.</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row"> 

          <div class="col-lg-8">
            <div class="row">
              <div class="col-md-7 text-left border-primary">
                <h2 class="font-weight-light text-primary">Berita Terbaru</h2>

              </div>
              <div class="col-lg-12">
                <br>
                <?php 
                  include 'config/koneksi.php';
                  $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori where kategori='1' order by id_info desc limit 3");
                  foreach($qTampil as $row){
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
                ?>
              </div>


              <div class="col-md-7 text-left border-primary">
                <h2 class="font-weight-light text-primary">Info Lainya</h2>
              </div>
                <?php 
                  include 'config/koneksi.php';
                  $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori WHERE NOT kategori='1' order by id_info desc");
                  foreach($qTampil as $row){
                ?>
              <div class="col-lg-6"><br>
                <div class="d-block d-md-flex listing vertical">
                  <a href="#" class="img d-block" style="background-image: url('admin/img/<?php echo $row['img']; ?>')"></a>
                  <div class="lh-content">
                    
                    <p class="mb-0">
                      <a href="kategori.php?kategori=<?php echo $row['kategori']; ?>">
                        <span class="category"><?php echo $row['nama_kategori']; ?></span>
                      </a>
                      <span class="review"><i class="icon-calendar"></i> <?php echo $row['tanggal']; ?></span>
                    </p>
                    <h3>
                      <a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>"><?php echo $row['judul']; ?></a>
                    </h3>
                    <address><?php echo substr($row['isi'], 0,160); ?>...</address>
                    
                  </div>
                </div>
              </div>
                <?php 
                  }
                ?>
            </div>

            <div class="col-12 mt-5 text-center">
              <div class="custom-pagination">
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <span class="more-page">...</span>
                <a href="#">10</a>
              </div>
            </div>
          </div>

          <!-- side bar-->
          <div class="col-lg-4 ml-auto">
            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Cari Info</h3>
              <div class="d-block d-md-flex listing">
                <div class="lh-content">
                  <form action="#" method="post">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Cari info disini...">
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Info Populer</h3>
              <div class="widget-content popular-posts">
                <ul>
                  <?php 
                    include 'config/koneksi.php';
                    $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori where kategori='1' order by id_info desc limit 3");
                    foreach($qTampil as $row){
                  ?>
                  <li>
                    <div class="item-thumbnail">
                      <img class="circle" src="admin/img/<?php echo $row['img']; ?>" height="72" width="72">
                      <span>
                        <a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>"><?php echo $row['judul']; ?></a>
                      </span>
                    </div>
                  </li>
                <?php } ?>
                </ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
<script type="text/javascript">
  //FEATURED HOVER
$(document).ready(function(){
      $(".linkfeat").hover(
        function () {
            $(".textfeat").show(500);
        },
        function () {
            $(".textfeat").hide(500);
        }
    );
});
</script>
<?php include 'public_part/footer.php';?>