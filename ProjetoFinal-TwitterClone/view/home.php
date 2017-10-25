<?php	
require_once('../controller/sessaoController.php');
require_once('../model/qtdeTweetSeguidores.php');
	
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Twitter clone</title>		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<!-- Icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../imagens/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="../imagens/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="../imagens/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="../imagens/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="../imagens/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="../imagens/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="../imagens/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../imagens/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../imagens/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="../imagens/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../imagens/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="../imagens/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../imagens/favicon-16x16.png">
		<link rel="manifest" href="../imagens/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="../imagens/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">	
		
		<script src="js/jsTweet.js"></script>
	</head>
	<body>
		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="../imagens/android-icon-48x48.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>
	    <div class="container">
	    	<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<h4><a href="home.php"><?php echo $_SESSION['nome_usuario']; ?></a></h4>
							<hr>
							<div class="col-md-6">
								TWEETS <br>
								<?= $qtde_tweets?>
							</div>

							<div class="col-md-6">
								SEGUIDORES <br>
								<?= $qtde_seguidores?>	
							</div>							
						</div>
					</div>	
				</div>

	    	<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<form id="form_tweet" class="input-group">
								<input type="text" name="input_tweet" id="input_tweet" class="form-control" placeholder="O que está acontecendo agora?" maxlength="140">
								<span class="input-group-btn">
									<button type="button" id="btn_tweet" class="btn btn-default">Tweet</button>
								</span>
							</form>
						</div>
					</div>
					<div class="list-group" id="tweets">
						
					</div>
				</div>
				<div class="col-md-3">
				<div class="panel panel-default">
						<div class="panel-body">
							<h4><a href="procurarPessoas.php">Procurar por pessoas</a></h4>													
						</div>
					</div>
				</div>
		</div>	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	</body>
</html>