<?php
    session_start();

    require_once('conexaoBD.php');

    $usuario = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM tb_usuarios WHERE nome_usuario = '$usuario' AND senha = '$senha' ";

    $conexao = new Conexao();
    $link = $conexao->conecta_mysql();

    $resuldado_id  = mysqli_query($link, $sql);

    if($resuldado_id){
        $dados_usuario = mysqli_fetch_array($resuldado_id);   
        
        if (isset($dados_usuario ['usuario']) || isset($dados_usuario ['senha'])) {
            header('Location: home.php');

            $_SESSION['usuario'] = $dados_usuario ['usuario'];
            $_SESSION['email'] = $dados_usuario ['email'];            
        }else {
            header('Location: index.php?erro=1');
        }
    }else{
        echo "Erro na execução da solicitação, por favor tente novamente mais tarde!
              Se o problema persistir contate o administrador do sistema."; 
    }

?>