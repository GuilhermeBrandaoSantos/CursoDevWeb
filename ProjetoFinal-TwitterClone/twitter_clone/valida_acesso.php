<?php

    require_once('conexaoBD.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $conexao = new Conexao();
    $link = $conexao->conecta_mysql();

    $sql = "SELECT * FROM tb_usuario where nome = '$usuario' and senha = '$senha' ";

    $resuldado_id  = mysqli_query($link, $sql);

    if($resuldado_id){
        $dados_usuario = mysql_fetch_array($resuldado_id);
        var_dump($dados_usuario);        
    }else{
        echo "Erro na execução da solicitação, por favor tente novamente mais tarde!
              Se o problema persistir contate o administrador so sistema.";
    }

?>