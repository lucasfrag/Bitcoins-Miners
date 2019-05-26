<!DOCTYPE html>
<html>
  <?php 
  	include("assets/includes/head.php"); 
  ?>
<body>
	<?php
		include("assets/includes/header.php")
	?>

	<!-- Page content -->
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          	<div class="card shadow">
	            <div class="card-header bg-transparent">
	              <h2 class="mb-0">Dashboard</h2>
	            </div>

				<div class="card-body">
					<div class="row">
				        <div class="col-sm-6">
						    <div class="card zoom-effect">
						      <div class="card-body">
						        <h5 class="card-title">BitMiner</h5>
						        <p class="card-text" id="bitcoins-bitminer">
						        	<img src="assets/img/bitminer.png" width="150px">
						        </p>
						        <a href="https://bitminer.io/" target="_blank" class="btn btn-secondary">Ir para página</a>
						        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-bitminer">Abrir Visualização</button>
						      </div>
						    </div>
						</div>

				        <div class="col-sm-6">
						    <div class="card zoom-effect">
						      <div class="card-body">
						        <h5 class="card-title">BTCProMiner</h5>
						        <p class="card-text" id="bitcoins-bitminer">
						        	<img src="assets/img/btcprominer.png" width="150px">
						        </p>
						        <a href="http://btcprominer.life/" target="_blank" class="btn btn-secondary">Ir para página</a>
						        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-btcprominer">Abrir Visualização</button>
						      </div>
						    </div>
						</div>

				        <div class="col-sm-6">
						    <div class="card zoom-effect">
						      <div class="card-body">
						        <h5 class="card-title">StartMiner</h5>
						        <p class="card-text" id="bitcoins-bitminer">
						        	<img src="assets/img/startminer.png" width="150px">
						        </p>
						        <a href="https://www.startminer.com/" target="_blank" class="btn btn-secondary">Ir para página</a>
						        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-startminer">Abrir Visualização</button>
						      </div>
						    </div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		include("assets/includes/modal-list.php")
	?>

	<?php
		include("assets/includes/footer.php")
	?>
</body>
</html>