<?php

	session_start();
	unset($_SESSION['nome_usuario']);
	unset($_SESSION['email_usuario']);

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0 ;

	

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
		<script>
			$(document).ready(function () {
				$('#btn_login').click(function () {

					var campo_vazio = false;

					if ($('#campo_usuario').val() == '') {
						$('#campo_usuario').css({'border-color' : '#A94442'});
						campo_vazio = true;
					}else{
						$('#campo_usuario').css({'border-color' : '#CCC'});						
					}
					
					if ($('#campo_senha').val() == '') {
						$('#campo_senha').css({'border-color' : '#A94442'});
						campo_vazio = true;					
					}else{
						$('#campo_senha').css({'border-color' : '#CCC'});												
					}

					if (campo_vazio) return false;	
				})
			})
		</script>
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
	          <a href="index.php"><img src="../imagens/android-icon-48x48.png" /></a>
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	            <li class="<?= $erro == 1 ? 'open' : '' ?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
						<p>Você possui uma conta?</h3>
						<br />
					<form method="post" action="../model/validaAcesso.php" id="formLogin">
						<div class="form-group">
							<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
						</div>
						
						<div class="form-group">
							<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
						</div>
						
						<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

						<br /><br />
						
					</form>

					<?php
						if($erro == 1){
							echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
						}
					?>
						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo ao twitter clone</h1>
	        <p>Veja o que está acontecendo agora...</p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>