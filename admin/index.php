<?php
	include 'public_part/header.php';
?>
<br><br>

	
    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
    	<div class="container">
    		<h5 class="card-title"><i class="icon-dashboard"></i> Dashboard</h5>
		      					
      			<div class="row">

			        <div class="col-md-4 col-xl-4">
			            <div class="card bg-c-blue order-card">
			                <div class="card-block">
			                    <h1 class="text-right"><i class="icon-address-card f-left" style="font-size: 50px;"></i>
			                    	<?php
				    		
							    		$kueri = mysqli_query($connect, "SELECT * FROM anggota");
			 
									 	$data = array ();
									 	while (($row = mysqli_fetch_array($kueri)) != null){
									 		$data[] = $row;
									 	}
									 		$cont = count ($data);
									 		echo  $cont;
							    	?>	
			                    </h1>
			                    </h1>
			                    <p class="m-b-0 f-right">DATA ANGGOTA</p>
			                </div>
			            </div>
			        </div>
			        
			        <div class="col-md-4 col-xl-4">
			            <div class="card bg-c-green order-card">
			                <div class="card-block">
			                    <h1 class="text-right"><i class="icon-newspaper-o f-left" style="font-size: 50px;"></i>
			                    	<?php
				    		
							    		$kueri = mysqli_query($connect, "SELECT * FROM info");
			 
									 	$data = array ();
									 	while (($row = mysqli_fetch_array($kueri)) != null){
									 		$data[] = $row;
									 	}
									 		$cont = count ($data);
									 		echo  $cont;
							    	?>
			                    </h1>
			                    <p class="m-b-0 f-right">POST</p>
			                </div>
			            </div>
			        </div>
			        
			        <div class="col-md-4 col-xl-4">
			            <div class="card bg-c-yellow order-card">
			                <div class="card-block">
			                    <h1 class="text-right"><i class="icon-tag f-left" style="font-size: 50px;"></i>
			                    	<?php
				    		
							    		$kueri = mysqli_query($connect, "SELECT * FROM kategori_info");
			 
									 	$data = array ();
									 	while (($row = mysqli_fetch_array($kueri)) != null){
									 		$data[] = $row;
									 	}
									 		$cont = count ($data);
									 		echo  $cont;
							    	?>
			                    </h1>
			                    <p class="m-b-0 f-right">KATEGORI POST</p>
			                </div>
			            </div>
			        </div>
			        

				</div>
				<div class="d-block d-md-flex listing">
			    	<div class="lh-content">
				    	<h5 class="card-title"><i class="icon-bar-chart"></i> Statistik</h5>
				    	<canvas id="myChart"></canvas>
				    </div>
				</div>
		  </div>
		</div>
	</div>


      
    </div>

    <!-- End demo content -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css"></script>


    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Data Anggota", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
        	
          label: '# of Votes',
          data: [12, 19, 3, 23, 2, 3],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>



<?php 
	include 'public_part/footer.php';
?>