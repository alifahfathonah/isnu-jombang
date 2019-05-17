<?php

//memanggil header
include('public_part/header.php');

?>


<!-- content -->
<div class="container" style="margin-top: 80px">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title"><i class="fa fa-list-ul"></i> FORM DATA SARJANA NU JOMBANG</h5>
            <hr>

              <form>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">NAMA LENGKAP</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">NO. KTP</label>
                  <input type="text" class="form-control" placeholder="Masukkan No. KTP Anda">
                </div>

                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> DAFTAR</button>
                <button type="reset" class="btn btn-warning"><i class="fas fa-undo"></i> RESET</button>

              </form>


        </div>
      </div>
    </div>
  </div>
</div>
<!-- end content -->


<?php

//memanggil footer
include('public_part/footer.php');
?>