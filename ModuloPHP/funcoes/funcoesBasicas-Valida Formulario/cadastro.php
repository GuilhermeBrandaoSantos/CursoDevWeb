<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Funções Básicas - Valida Formulário</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?php

					if ( isset($_POST['email']) && empty($_POST['email']) ) {
						echo "<h4>Preencha o nome</h4>";
					}
					if ( isset($_POST['cpf']) && empty($_POST['cpf']) ) {
						echo "<h4>Preencha o CPF</h4>";
					}
					if ( isset($_POST['cpf']) && !is_numeric($_POST['cpf']) ) {
						echo "<h4>No campo CPF digite apenas números</h4>";
					}
				?>		
				<div class="col-md-12 ">
					<form class="col-md-6" action="" method="post">
						<div class="form-group">
							<label for="InputEmail">Email*</label>
							<input type="email" class="form-control" id="InputEmail" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="InputCPF">CPF*</label>
							<input type="numeric" class="form-control" id="InputCPF" name="cpf" placeholder="CPF">
						</div>
						<button type="submit" class="btn btn-default">Entrar</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>