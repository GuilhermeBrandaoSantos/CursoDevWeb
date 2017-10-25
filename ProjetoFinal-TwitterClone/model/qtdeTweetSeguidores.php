<?php
require_once('conexaoBD.php');

$id_usuario = $_SESSION['id_usuario'];    

$conexao = new Conexao();
$link = $conexao->conecta_mysql();

// quantidade tweets

$sql = "SELECT 	COUNT(*) AS qtde_tweets FROM tb_tweet WHERE id_usuario = $id_usuario";
$resultado = mysqli_query($link, $sql);			
$qtde_tweets = 0;
if ($resultado) {
    $registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    $qtde_tweets = $registro['qtde_tweets'];
}else{
    echo 'Erro ao executar a query';
}

// quantidade seguidores

$sql = "SELECT 	COUNT(*) AS qtde_seguidores FROM tb_usuario_seguidor WHERE seguindo_id_usuario = $id_usuario";
$resultado = mysqli_query($link, $sql);			
$qtde_seguidores = 0;
if ($resultado) {
    $registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    $qtde_seguidores = $registro['qtde_seguidores'];
}else{
    echo 'Erro ao executar a query';
}
?>