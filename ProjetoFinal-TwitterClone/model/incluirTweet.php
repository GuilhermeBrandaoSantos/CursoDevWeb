<?php
    session_start();
    
    if(!isset($_SESSION['nome_usuario'])){
		header('Location: index.php?erro=1');
    }

    require_once('conexaoBD.php');
        
    $input_tweet = $_POST['input_tweet'];
    $id_usuario = $_SESSION['id_usuario'];    

    if ($input_tweet != '' && $id_usuario!= '') {
        $conexao = new Conexao();
        $link = $conexao->conecta_mysql();    
    
        $sql = "INSERT INTO tb_tweet (id_usuario, tweet) VALUES ($id_usuario, '$input_tweet')";
    }    
    
    if(mysqli_query($link, $sql)){
       echo "Tweet incluido com sucesso"; 
    }else{
        echo "Erro ao registrar o Tweet!";
    }
?>