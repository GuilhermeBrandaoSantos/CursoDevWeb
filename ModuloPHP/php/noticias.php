<?

$noticias = array();

$noticias[1]['titulo'] = "Titulo da noticia 1";
$noticias[1]['conteudo'] = "Conteudo da noticia 1";

$noticias[2]['titulo'] = "Titulo da noticia 2";
$noticias[2]['conteudo'] = "Conteudo da noticia 2";

$noticias[3]['titulo'] = "Titulo da noticia 3";
$noticias[3]['conteudo'] = "Conteudo da noticia 3";

// $count = 1;

for ($count = 1; $count <= 3 ; $count ++) { 
	
	echo $noticias[$count]['titulo'];
	echo "<br>";
	echo $noticias[$count]['conteudo'];
	echo "<br> <br>";
}

?>