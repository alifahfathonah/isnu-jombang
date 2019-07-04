<?php
	session_start();
	include '../config/koneksi.php';
	if(empty($_SESSION['admin'])){
	    header("location:login.php");
	}
	include 'public_part/header.php';
?>
<br>
	<div class="site-section bg-light">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-3">
		            <?php include 'public_part/menu_sidebar.php';?>
		         </div>
		         <div class="col-md-9">
		         		<div class="mb-5">
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-list-ul"></i> Dashboard</h5>
			                </div>
			              </div>
		            	</div>
		         </div>				
			</div>
		</div>
	</div>
<?php 
	include 'public_part/footer.php';
?>