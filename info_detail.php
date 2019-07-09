<?php include 'public_part/header.php';?>

  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bg_isnu.jpg); min-height: 50px; bottom: 110px;" data-aos="fade" data-stellar-background-ratio="0.5">
    </div> 

  <div class="site-section">
      <div class="container">
        <div class="row">
            <?php 
              include 'config/koneksi.php';
              $id_info = $_GET["id_info"];
              $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A RIGHT JOIN kategori_info AS B ON A.kategori = B.id_kategori WHERE id_info=$id_info");
              foreach($qTampil as $row){
            ?>

            <div class="col-md-8 text-left border-success" style="  bottom: 130px;">
              <h1 class="font-weight-light text-success"><?php echo $row['judul'];?></h1>

              
              <p class="color-black-opacity-5">

                <a class="btn btn-secondary" href="kategori.php?kategori=<?php echo $row['kategori']; ?>"><small><?php echo $row['nama_kategori'];?> </small> </a>

                <small>
                  <i class="fas fa-calendar-alt"></i> <?php echo $row['tanggal']; ?>
                </small>
                <small style="margin-left: 15px;">
                  <i class="fas fa-user"></i> ISNU Jombang
                </small>
              </p>

              <img src="admin/img/<?php echo $row['img']; ?>" alt="Image" class="img-fluid" style="width: 100%;">

              <p>
                <?php echo $row['isi'];?>
              </p>

              <div class="post-author">
                <div class="media">
                  <div class="media-body">
                    <ul class="author-social">
                      Share :
                      <a href="" target="_BLANK" class="btn waves-effect waves-light" style="background-color:#3B5998;margin:1px;" title="Bagikan ke Facebbok"><i class="icon-facebook" style="color:#fff"></i> <span style="color:#fff">Facebook</span></a>

                      <a href="" target="_BLANK" class="btn waves-effect waves-light" style="background-color:#55acee;margin:1px;" title="Bagikan ke Twitter"><i class="icon-twitter" style="color:#fff"></i> <span style="color:#fff">Tweet</span></a>

                      <a href="" target="_BLANK" class="btn waves-effect waves-light" style="background-color:green;margin:1px;" title="Bagikan ke WhatsApp"><i class="icon-whatsapp" style="color:#fff"></i> <span style="color:#fff">WhatsApp</span></a>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <?php } ?>

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
        </div>
      </div>
    </div> 
<?php include 'public_part/footer.php';?>