<?php

    require_once('conexaoBD.php');

    $sql = "SELECT * FROM tb_usuario";

    $conexao = new Conexao();
    $link = $conexao->conecta_mysql();

    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){

        $dados_usuario = array();

        while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){

            $dados_usuario[] = $linha;

        }

        foreach($dados_usuario as $usuario){
            echo $usuario['email'];
            echo "<br /><br />";
        }

    }else{
        
        echo "Erro na execução da consulta, favor entrar em contato com o admin do site";

    }

?>