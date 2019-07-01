<?php
/*	session_start();

	if(isset($_SESSION['username'])){
	 	if(isset($_SESSION['admin'])){
	 		header('location:admin/index.php');
		}else if(isset($_SESSION['user'])){
		 	header('location:user/index.php');
		}
	}else{
*/		include ('public_part/header.php');
		include ('public_part/navbar.php');
		include ('public_part/menu.php');

?>


<div class="container" style="margin-top: 30px">
	<div class="row">
		<div class="col-md-8">
			<h5 class="card-title"><i class="fa fa-list-ul"></i> BERITA</h5><hr>
				<div class="card">
				  <img src="assets/gambar/ISNU.png" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Loream Ipsum</h5>
				    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				    <a href="#" class="btn btn-primary">Selengkapnya</a>
				  </div>
				</div>
		</div>

		<div class="col-md-4">
			<h5 class="card-title"> TENTANG ISNU</h5><hr>
			<div class="card">
					<div class="card-body" style="font-size: 20px;">
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<i class="fas fa-camera btn btn-primary"> Social Media</i>
					</div>
			</div>
		</div>
	</div>
</div>
<!-- end content -->

<?php
		include('public_part/footer.php');
	//}
?>