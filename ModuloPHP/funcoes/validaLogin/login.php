<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Valida Login</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
		<?php

		 ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
					<form class="col-md-6" action="valida_login.php" method="post">
						<div class="form-group">
							<label for="InputEmail">Email</label>
							<input type="email" class="form-control" id="InputEmail" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="InputSenha">Senha</label>
							<input type="password" class="form-control" id="InputPassword" name="senha" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-default">Entrar</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>