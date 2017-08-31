<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Descontos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
		<?php

			include('funcoes_desconto.php');

			$valorTotal = 1000;
			$desconto = 50;
			$valorComDesconto = calculaDesconco($valorTotal, $desconto);
		 ?>
		<div class="container">
			<div class="row">
				<h1>Descontos</h1>
				<p>Valor Total: R$ <?php echo $valorTotal; ?></p>
				<p>Desconto: R$ <?php echo $desconto; ?>%</p>
				<p>Valor Total c/ desconto: R$ <?php echo $valorComDesconto; ?> </p>
			</div>
		</div>
	</body>
</html>