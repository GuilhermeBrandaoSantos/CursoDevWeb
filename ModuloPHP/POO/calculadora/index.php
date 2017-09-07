<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Calculadora - PHP</title>

		<!-- ICO -->
		<link rel="icon" sizes="192x192" href="imagens/calculadora.ico">

		<!-- BOOTSTRAP -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
		<?php

		 ?>
		<div class="container">
			<div class="row">
				<div class="col-md-6 ">
					<form class="col-md-12" action="calcular.php" method="post">
						<div class="form-group">
							<label for="Numero1">Primeiro Número</label>
							<input type="number" class="form-control" id="InputNumero1" name="numero1">
						</div>
						<div class="form-group">
							<label for="Numero2">Segundo Número</label>
							<input type="number" class="form-control" id="InputNumero2" name="numero2">
						</div>
						<label for="ChooseOperacao">Escolha uma operação</label>
						<div class="radio">
							<label>
								<input type="radio" name="operacao" id="adicao" value="somar" checked>
								Adição
							</label>
							<label>
								<input type="radio" name="operacao" id="subtracao" value="subtrair">
								Subtração
							</label>
							<label>
								<input type="radio" name="operacao" id="multiplicacao" value="multiplicar">
								Multiplicação
							</label>
							<label>
								<input type="radio" name="operacao" id="divisao" value="dividir">
								Divisão
							</label>
						</div>
						<button type="submit" class="btn btn-warning">Calcular</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>