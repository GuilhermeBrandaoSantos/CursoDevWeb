<?php
    session_start();
    
    if(!isset($_SESSION['nome_usuario'])){
		header('Location: view/index.php?erro=1');
    }

    require_once('conexaoBD.php');
        
    $id_usuario = $_SESSION['id_usuario'];    
    $deixar_seguir_id_usuario = $_POST['deixar_seguir_id_usuario'];

    if ($id_usuario == '' && $deixar_seguir_id_usuario == '') {
        die();
    }    

    $conexao = new Conexao();
    $link = $conexao->conecta_mysql();    

    $sql = "DELETE FROM tb_usuario_seguidor WHERE id_usuario = $id_usuario AND seguindo_id_usuario = $deixar_seguir_id_usuario";
    
     mysqli_query($link, $sql);
?>