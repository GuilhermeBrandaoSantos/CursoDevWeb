<?php
    session_start();
    
    if(!isset($_SESSION['nome_usuario'])){
		header('Location: view/index.php?erro=1');
    }

    require_once('conexaoBD.php');
        
    $id_usuario = $_SESSION['id_usuario'];    
    $seguir_id_usuario = $_POST['seguir_id_usuario'];

    if ($id_usuario == '' && $seguir_id_usuario == '') {
        die();
    }    

    $conexao = new Conexao();
    $link = $conexao->conecta_mysql();    

    $sql = "INSERT INTO tb_usuario_seguidor (id_usuario, seguindo_id_usuario) VALUES ($id_usuario, $seguir_id_usuario)";
    
     mysqli_query($link, $sql);
?>