<?php
  $json_mercadobitcoin = file_get_contents("https://www.mercadobitcoin.net/api/btc/ticker/");
  $datamercadobitcoin = json_decode($json_mercadobitcoin, true);
  $mercadobitcoin_price = $datamercadobitcoin['ticker']['last'];
  $mercadobitcoin_volume = $datamercadobitcoin['ticker']['vol'];
  //$mercadobitcoin_price = intval($mercadobitcoin_price);
  //$mercadobitcoin_volume = intval($mercadobitcoin_volume);
  $varmercadobitcoin = $mercadobitcoin_price * $mercadobitcoin_volume;
?>
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
						<div class="col-lg-12">
								<h2 class="text-center">Valor atual do Bitcoin:</h2>
								<h1 class="text-center" style="color: #007bff">R$ <?=number_format($mercadobitcoin_price, 2, ',', '.')?></h1>
								<br>
						</div>

				        <div class="col-sm-6">
						    <div class="card zoom-effect">
						      <div class="card-body">
						        <h5 class="card-title">BitMiner</h5>
						        <p class="card-text" id="bitcoins-bitminer">
						        	<img src="assets/img/bitminer.png" height="50px">
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
						        	<img src="assets/img/btcprominer.png" height="50px">
						        </p>
						        <a href="https://btcprominer.life/" target="_blank" class="btn btn-secondary">Ir para página</a>
						        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-btcprominer">Abrir Visualização</button>
						      </div>
						    </div>
						</div>

				        <div class="col-sm-6">
						    <div class="card zoom-effect">
						      <div class="card-body">
						        <h5 class="card-title">StartMiner</h5>
						        <p class="card-text" id="bitcoins-bitminer">
						        	<img src="assets/img/startminer.png" height="50px">
						        </p>
						        <a href="https://www.startminer.com/" target="_blank" class="btn btn-secondary">Ir para página</a>
						        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-startminer">Abrir Visualização</button>
						      </div>
						    </div>
						</div>

				        <div class="col-sm-6">
						    <div class="card zoom-effect">
						      <div class="card-body">
						        <h5 class="card-title">99mining</h5>
						        <p class="card-text" id="bitcoins-bitminer">
						        	<img src="assets/img/99mining.png" height="50px">
						        </p>
						        <a href="https://99mining.cloud/profile.php" target="_blank" class="btn btn-secondary">Ir para página</a>
						        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-99mining">Abrir Visualização</button>
						      </div>
						    </div>
						</div>

				        <div class="col-sm-6">
						    <div class="card zoom-effect">
						      <div class="card-body">
						        <h5 class="card-title">JET Mining</h5>
						        <p class="card-text" id="bitcoins-bitminer">
						        	<img src="assets/img/jetmining.png" height="50px">
						        </p>
						        <a href="https://www.jetmining.website/dashboard" target="_blank" class="btn btn-secondary">Ir para página</a>
						        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-jetmining">Abrir Visualização</button>
						      </div>
						    </div>
						</div>

				        <div class="col-sm-6">
						    <div class="card zoom-effect">
						      <div class="card-body">
						        <h5 class="card-title">Legit Mining</h5>
						        <p class="card-text" id="bitcoins-bitminer">
						        	<img src="assets/img/legitmining.png" height="50px">
						        </p>
						        <a href="https://www.legitmining.website/dashboard" target="_blank" class="btn btn-secondary">Ir para página</a>
						        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-legitmining">Abrir Visualização</button>
						      </div>
						    </div>
						</div>

				        <div class="col-sm-6">
						    <div class="card zoom-effect">
						      <div class="card-body">
						        <h5 class="card-title">BTC Mining</h5>
						        <p class="card-text" id="bitcoins-bitminer">
						        	<img src="assets/img/btcmining.png" height="50px">
						        </p>
						        <a href="https://miningfreebitcoin.com/dashboard.php" target="_blank" class="btn btn-secondary">Ir para página</a>
						        <button class="btn btn-primary" data-toggle="modal" data-target="#modal-btcmining">Abrir Visualização</button>
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