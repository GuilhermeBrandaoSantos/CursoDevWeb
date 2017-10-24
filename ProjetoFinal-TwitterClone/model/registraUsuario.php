<?php

    require_once('conexaoBD.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $conexao = new Conexao();
    $link = $conexao->conecta_mysql();

    $usuario_existe = false;

    // verificação de usuario
    $sql = "SELECT * FROM tb_usuarios WHERE nome_usuario = '$usuario' AND email = '$email'";
    
    if ($resultado = mysqli_query($link, $sql)) {

        $dados_usuario = mysqli_fetch_array($resultado);

        if (isset($dados_usuario['nome_usuario']) && isset($dados_usuario['email'])) {
            $usuario_existe = true;
        }else{
            echo 'Erro ao tentar localizar o registro';
        }
    }

    if ($usuario_existe) {
        
        $retorno_erro.="erro_usuario=1&";

        header('Location: view/inscrevase.php?'.$retorno_erro);
        die();
    }

    
    $sql = "INSERT INTO tb_usuarios (nome_usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }else{
        echo "Erro ao registrar o usuário!";
    }

?>