<?php
  include 'public_part/header.php';
?>
  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bg_isnu.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>INFORMASI ISNU</h1>
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
                  $qTampil = mysqli_query($connect, "SELECT * FROM info where kategori= 'berita' order by id_info desc limit 3");
                  foreach($qTampil as $row){
                ?>
                <div class="d-block d-md-flex listing">
                  <a href="listings-single.html" class="img d-block" style="background-image: url('admin/img/<?php echo $row['img']; ?>')"></a>
                  <div class="lh-content">

                    <h3>
                      <a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>"><?php echo $row['judul']; ?></a>
                    </h3>

                    <p><?php echo substr($row['isi'], 0,160); ?>...</p>
                
                    <a href="kategori.php?kategori=<?php echo $row['kategori']; ?>">
                      <span class="category"><?php echo $row['kategori']; ?></span>
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
                $qTampil = mysqli_query($connect, "SELECT * FROM info WHERE NOT kategori='berita' order by id_info desc");
                foreach($qTampil as $row){
              ?>
              <div class="col-lg-6"><br>
                <div class="d-block d-md-flex listing vertical">
                  <a href="#" class="img d-block" style="background-image: url('admin/img/<?php echo $row['img']; ?>')"></a>
                  <div class="lh-content">
                    
                    <p class="mb-0">
                      <a href="kategori.php?kategori=<?php echo $row['kategori']; ?>">
                        <span class="category"><?php echo $row['kategori']; ?></span>
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
          <div class="col-lg-3 ml-auto">

            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Filters</h3>
              <form action="#" method="post">
                <div class="form-group">
                  <input type="text" placeholder="What are you looking for?" class="form-control">
                </div>
                <div class="form-group">
                  <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" name="" id="">
                        <option value="">All Categories</option>
                        <option value="" selected="">Real Estate</option>
                        <option value="">Books &amp;  Magazines</option>
                        <option value="">Furniture</option>
                        <option value="">Electronics</option>
                        <option value="">Cars &amp; Vehicles</option>
                        <option value="">Others</option>
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <!-- select-wrap, .wrap-icon -->
                  <div class="wrap-icon">
                    <span class="icon icon-room"></span>
                    <input type="text" placeholder="Location" class="form-control">
                  </div>
                </div>
              </form>
            </div>
            
            <div class="mb-5">
              <form action="#" method="post">
                <div class="form-group">
                  <p>Radius around selected destination</p>
                </div>
                <div class="form-group">
                  <input type="range" min="0" max="100" value="20" data-rangeslider>
                </div>
              </form>
            </div>

            <div class="mb-5">
              <form action="#" method="post">
                <div class="form-group">
                  <p>Category 'Real Estate' is selected</p>
                  <p>More filters</p>
                </div>
                <div class="form-group">
                  <ul class="list-unstyled">
                    <li>
                      <label for="option1">
                        <input type="checkbox" id="option1">
                        Residential
                      </label>
                    </li>
                    <li>
                      <label for="option2">
                        <input type="checkbox" id="option2">
                        Commercial
                      </label>
                    </li>
                    <li>
                      <label for="option3">
                        <input type="checkbox" id="option3">
                        Industrial
                      </label>
                    </li>
                    <li>
                      <label for="option4">
                        <input type="checkbox" id="option4">
                        Land
                      </label>
                    </li>
                  </ul>
                </div>
              </form>
            </div>

            <div class="mb-5">
              <h3 class="h6 mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptatem placeat facilis, reprehenderit eius officiis.</p>
            </div>

          </div>

        </div>
      </div>
    </div>

<?php include 'public_part/footer.php';?>