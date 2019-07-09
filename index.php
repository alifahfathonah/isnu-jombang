<?php
  include 'public_part/header.php';
?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/bg_isnu.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up">ISNU JOMBANG</h1>
                <p data-aos="fade-up" data-aos-delay="100">Ikatan Sarjana Nahdlatul Ulama Jombang. </p>
              </div>
            </div>

            <div class="form-search-wrap mb-3" data-aos="fade-up" data-aos-delay="200">
              <h2>DAFTAR JADI ANGGOTA ISNU</h2><hr>
              <form method="post" action="login/aksi-daftar.php">
                <div class="row align-items-center">
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-5">
                    <input type="text" name="username" class="form-control rounded" placeholder="Buat Username" required>
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-5">
                      <input type="password" name="password" class="form-control rounded" placeholder="Buat Password" required> 
                  </div>
                  <input type="hidden" name="img" id="inputPassword" class="form-control" value="avatar.png">
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn btn-success btn-block rounded" value="Daftar">
                  </div>
                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-success">PROFIL ISNU</h2>
            <p class="color-black-opacity-5">Ikatan Sarjana Nahdlotul Ulama Jombang</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img src="images/bg_isnu.jpg" class="img-fluid rounded" width="500">

          </div>
          <div class="col-md-6">
           
            <p>
              ISNU merupakan badan otonom (Banom) NU yang paling muda. Oleh karenanya, belum banyak diketahui orang. Meski sudah dideklarasikan pada 19 November 1999 (11 Rajab 1420 H) di Surabaya, ISNU baru secara resmi dikukuhkan sebagai Banom NU pada tahun 2010 lewat Muktamar NU ke- 32 di Makasar.
            </p>
            <p>
              Sebagai Banom NU, ISNU berfungsi untuk membantu melaksanakan kebijakan NU pada kelompok sarjana dan kaum intelektual yang mempunyai integritas, kejujuran, dan komitmen, visi, kreativitas, ketahanan mental, dan keadilan yang telah diamanatkan pada muktamar NU ke-29 di Cipasung Jawa Barat pada tahun 1994.
            </p>
          </div>


        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-success">INFO ISNU JOMBANG</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-8">
            <?php 
              include 'config/koneksi.php';
              $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A RIGHT JOIN kategori_info AS B ON A.kategori = B.id_kategori order by id_info desc limit 3");
              foreach($qTampil as $row){
            ?>
            <div class="d-block d-md-flex listing">
              <a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>" class="img d-block" style="background-image: url('admin/img/<?php echo $row['img']; ?>')">
                
              </a>
              <div class="lh-content">
                <h3 style="font-size: 30px;">
                    <a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>"><?php echo $row['judul']; ?></a>
                </h3>
                
                <small><?php echo substr($row['isi'], 0,160); ?>...</small>
                <br><br>
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
          <div class="col-md-4 ml-auto">
            <div class="mb-5">
              <h3 class="h5 text-black mb-3">Info Populer</h3>
              <div class="widget-content popular-posts">
                <ul>
                  <?php 
                    include 'config/koneksi.php';
                    $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A RIGHT JOIN kategori_info AS B ON A.kategori = B.id_kategori where kategori='1' order by id_info desc limit 3");
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
          <div class="col-12 text-center mt-4">
            <a href="info.php" class="btn btn-primary rounded py-2 px-4 text-white">Lihat Semua Info</a>
          </div>
        </div>
        </div>
      </div>
    </div>
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-success">Testimoni Tokoh</h2>
          </div>
        </div>
        <div class="row mb-3 align-items-stretch">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry text-center">
              <img src="images/toko1.jpg" alt="Image" class="img-fluid d-block rounded-circle mx-auto">
              
              <p>"Membawa ISNU pada jalurnya, yakni menghimpun kepentingan para intelektual, professional, dan sarjana di lingkungan NU dengan meningkatkan kualitas sumber daya melalui jalur pendidikan."</p>

              <h2 class="font-size-regular"><a href="#" class="text-black">Dr. Ali Masykur Musa, M.Si, M.Hum.</a></h2>
              <div class="meta mb-3">Ketua Umum PP ISNU</div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry text-center">
              <img src="images/toko2.jpg" alt="Image" class="img-fluid d-block rounded-circle mx-auto" width="250">
              
              <p>"ISNU yang berkeinginan untuk membawa semangat Gus Dur itu semoga ISNU ke depan bisa ikut memecahkan persoalan-persoalan yang masih ada di Jatim."</p>

              <h2 class="font-size-regular"><a href="#" class="text-black">Dra. Hj. Khofifah Indar Parawansa, M.Si.</a></h2>
              <div class="meta mb-3">Gubernur Jawa Timur 2019-2024</div>
            </div> 
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry text-center">
              <img src="images/toko3.jpg" alt="Image" class="img-fluid d-block rounded-circle mx-auto" width="250">
              
              <p>"Visi saya menjadikan ISNU sebagai organisasi yang kuat untuk mendukung NU bermartabat menuju Jatim yang sejahtera."</p>

              <h2 class="font-size-regular"><a href="#" class="text-black">Prof. Dr. M. Mas'ud Said, MM, PhD</a></h2>
              <div class="meta mb-3">Ketua PW ISNU Jawa Timur</div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  
    
<?php include 'public_part/footer.php';?>