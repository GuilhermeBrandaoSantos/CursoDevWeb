<?
	
	echo "ISSET(); VERIFICA SE A VARIAVEL FOI INICIADA <br> ";
	// VERIFICA SE A VARIAVEL FOI INICIADA
	$teste1 = "Guilherme";
	if (isset($teste1)) {
		echo "Variavel iniciada como: $teste1";
	}else{
		echo "Variavel não iniciada";
	}

	echo "<br> <br>";

	echo "EMPTY();VERIFICA SE A VARIAVEL ESTA VAZIA <br>";	
	// VERIFICA SE A VARIAVEL ESTA VAZIA
	$teste2 = "Guilherme";
	if (empty($teste2)) {
		echo "Variavel vazia";
	}else{
		echo "Variavel com valor";
	}	

	echo "<br> <br>";

	echo "IS_NUMERIC();VERIFICA SE A VARIAVEL É NUMÉRICA <br>";
	// VERIFICA SE A VARIAVEL É NUMÉRICA
	$teste3 = "";
	if (is_numeric($teste3)) {
		echo "Variavel é numérica";
	}else{
		echo "Variavel não é numérica";
	}	

?>