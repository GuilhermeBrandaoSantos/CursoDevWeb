<?php
	
	session_start();

	if(!isset($_SESSION['nome_usuario'])){
		header('Location: index.php?erro=1');
	}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Twitter clone</title>		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<!-- Icon -->
    <link rel="icon" sizes="192x192" href="imagens/icone_twitter.png">
		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">	
		<link rel="stylesheet" href="estilo_home.css">
		<script src="js/js_tweet.js"></script>
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
	          <img src="imagens/icone_twitter.png" />
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
							<h4><?php echo $_SESSION['nome_usuario']; ?></h4>
							<hr>
							<div class="col-md-6">
								TWEETS <br>
								1
							</div>

							<div class="col-md-6">
								SEGUIDORES <br>
								1	
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
							<h4><a href="procurar_pessoas.php">Procurar por pessoas</a></h4>													
						</div>
					</div>
				</div>
		</div>	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>	
	</body>
</html>