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
              <div class="col-lg-12">
                <div class="d-block d-md-flex listing vertical bg-success">
                  <h2 class="lh-content text-white" style="font-weight: bold; font-size: 20px;"><i class="icon-newspaper-o"></i> BERITA TERBARU</h2>
                </div>
                <?php 
                  include 'config/koneksi.php';
                  $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori where kategori='1' order by id_info desc limit 5");
                  foreach($qTampil as $row){
                ?>
                <div class="d-block d-md-flex listing overflow zoom">
                  <a href="#" class="img d-block " style="background-image: url('admin/img/<?php echo $row['img']; ?>')"></a>
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
            </div>

            <!-- ///////////// INFO LAINNYA //////////// -->
            <div class="d-block d-md-flex listing vertical bg-success">
              <h2 class="lh-content text-white" style="font-weight: bold; font-size: 20px;"><i class="icon-book"></i> INFO LAINNYA</h2>
            </div>

            <div class="row" id="result_para">
                    <?php
                        include 'config/koneksi.php';
                        $qTampil = mysqli_query($connect, "
                                   SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori 
                                  where not id_kategori='1' order by id_info desc limit 4");
                        foreach($qTampil as $row){
                      ?>
              <div class="col-lg-6">
                <div class="d-block d-md-flex listing vertical">
                  <a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>" class="img d-block" style="background-image: url('admin/img/<?php echo $row['img'];?>')"></a>
                  <div class="lh-content">
                    <a href="kategori.php?kategori=<?php echo $row['kategori']; ?>">
                      <span class="category"><?php echo $row['nama_kategori']; ?></span>
                    </a>
                    
                      <i class="icon-calendar"></i> 
                      <span class="review"><?php echo $row['tanggal']; ?></span>
                    
                    <h3><a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>"><?php echo $row['judul']; ?></a></h3>
                    <address><?php echo substr($row['isi'], 0,160); ?>...</address>
                    
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
            <div class="col-md-12 text-center">
              <input type="hidden" id="result_no" value="4">
              <button id="load" class="btn btn-success rounded py-2 px-4 text-white"> Lihat Lainnya</button>
            </div>
            <br>
          </div>


          <!-- side bar-->
          <div class="col-lg-4 ml-auto">
            <div class="mb-5">
              
              <div class="d-block d-md-flex listing">
                <div class="lh-content">
                  <form id="custom-search-input" method="post" action="cari.php">
                      <div class="input-group col-md-12">
                          <input type="text" name="search" class="form-control input-lg" placeholder="Cari Info Disini" required />
                          <span class="input-group-btn">
                              <button type="submit">
                                  <i class="icon-search"></i>
                              </button>
                          </span>
                      </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="mb-5">
              <div class="d-block d-md-flex listing bg-success">
                <h2 class="lh-content text-white" style="font-weight: bold; font-size: 20px;"><i class="icon-bell"></i> INFO POPULER</h2>
              </div>
              <div class="widget-content popular-posts">

                <ul>
                  <?php 
                    include 'config/koneksi.php';
                    $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori where kategori='1' order by id_info desc limit 10");
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
              <br><br>
              <div class="d-block d-md-flex listing bg-success">
                <h2 class="lh-content text-white" style="font-weight: bold; font-size: 20px;"><i class="icon-tag"></i> KATEGORI</h2>
              </div>
              <div class="d-block d-md-flex listing">
                <div class="lh-content">
                  <?php 
                    include 'config/koneksi.php';
                    $qTampil = mysqli_query($connect, "SELECT * FROM kategori_info");
                    foreach($qTampil as $row){
                  ?>
                  <a href="kategori.php?kategori=<?php echo $row['id_kategori']; ?>">
                      <span class="category"><i class="icon-tag"></i> <?php echo $row['nama_kategori']; ?></span>
                    </a>
                <?php } ?>
                </div>
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