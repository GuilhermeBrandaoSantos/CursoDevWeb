<?
	echo "<h2>Verificar o código antes</h2><br>";
	// Função IS_ARRAY() verifica se a variavél passada é um array ou não.
	
	$array1 = array('Teste');
	$retorno1 = is_array( $array1 );

	if ($retorno1) {
		echo "Verdadeiro";
	}else{
		echo "Falso";
	}

	echo "<br><br><br>";

	// Função IN_ARRAY() verifica se o parametro passado está naquele array.

	$array2 = array('Guilherme', 'Jhonny', 'Sati', 'Ricardo');
	$retorno2 = in_array('Sati', $array2 );

	if ($retorno2) {
		echo "Verdadeiro";
	}else{
		echo "Falso";
	}

	echo "<br><br><br>";

	// Função ARRAY_KEYS Retorna todas as chaves ou uma parte das chaves de um array

	$array = array(0 => 100, "cor" => "vermelho");
	var_export (array_keys($array));

	echo "<br>";

	$array = array("azul", "vermelho", "verde", "azul", "azul");
	var_export (array_keys($array, "azul"));
	
	echo "<br>";
	
	$array = array("cor"     => array("azul", "vermelho", "verde"),
	               "tamanho" => array("pequeno", "medio", "grande"));
	var_export (array_keys($array));
?>