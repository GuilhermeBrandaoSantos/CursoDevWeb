<?php

	$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Twitter clone</title>		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<!-- Icon -->
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
						<a href="index.php"><img src="imagens/icone_twitter.png" /></a>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Inscreva-se já.</h3>
	    		<br />
					<form method="post" action="registra_usuario.php" id="formCadastrarse">
						<div class="form-group">
							<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
						</div>

						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
						</div>

						<div class="col-md-12">
						<?php
							if ($erro_usuario) {
								echo '<font color="#FF0000">Usuário e/ou e-mail ja cadastrado(s)</font>'; 
							}
						?>
						</div>
						
						<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
					</form>
				</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>