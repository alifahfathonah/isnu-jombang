<?php include 'public_part/header.php';?>

  <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/bg_isnu.jpg); min-height: 300px;" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center" style="margin-bottom: 150px;">
              <div class="col-md-8 text-center">
                <h1>DAFTAR ANGGOTA</h1>
                <p class="mb-0">Ikatan Sarjana Nahdlatul Ulama Jombang.</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div> 

  <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-success">
            <h2 class="font-weight-light text-success">Daftar Anggota</h2>
            <p class="color-black-opacity-5">Ikatan Sarjana Nahdlotul Ulama Jombang Tahun <?php echo date('Y');?> /
            <?php 
                  $thn_sekarang = date('Y');
                  $thn_kemarin = 1;

                  $thn_hasil = $thn_sekarang - $thn_kemarin;
                  echo $thn_hasil;
            ?>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <table class="table table-striped table-bordered table-resposive" id="table_id">
             <thead>
                  <tr>
                    <th><strong>No</strong></th>
                    <th><strong>Nama</strong></th>
                    <th><strong>Jenjang</strong></th>
                    <th><strong>Jurusan</strong></th>
                    <th><strong>PT / Universitas</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                            include ('config/koneksi.php');
                    $no = 1;
                    $qTampil = mysqli_query($connect, "SELECT * FROM anggota");
                    foreach($qTampil as $row){
                  ?>

                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['jenjang']; ?></td>
                    <td><?php echo $row['jurusan']; ?></td>
                    <td><?php echo $row['pt_univ']; ?></td>
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
<?php include 'public_part/footer.php';?>