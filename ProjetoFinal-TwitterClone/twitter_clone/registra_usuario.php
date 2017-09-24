<?php

    require_once('conexaoBD.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $conexao = new Conexao();
    $link = $conexao->conecta_mysql();

    $sql = "insert into tb_usuario (usuario, email, senha) values ('$usuario', '$email', '$senha')";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }else{
        echo "Erro ao registrar o usuário!";
    }

?>