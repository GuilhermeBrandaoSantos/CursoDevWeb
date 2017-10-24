<?php
    session_start();
    
    if(!isset($_SESSION['nome_usuario'])){
		header('Location: view/index.php?erro=1');
    }

    require_once('conexaoBD.php');

    $id_usuario = $_SESSION['id_usuario'];    

    $conexao = new Conexao();
    $link = $conexao->conecta_mysql();    

    $sql = "SELECT DATE_FORMAT(t.data_inclusao, '%d %b %Y') AS data_inclusao_formatada, t.tweet, u.nome_usuario 
            FROM tb_tweet AS t JOIN tb_usuarios AS u ON(t.id_usuario = u.id) 
            WHERE id_usuario = '$id_usuario' ORDER BY data_inclusao DESC";

    $resultado = mysqli_query($link, $sql);

    if ($resultado) {
        while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo '<a href="#" class="list-group-item">';
            echo '<h4 class="list-group-item-heading">'.$registro['nome_usuario'].' 
                  <small> - '.$registro['data_inclusao_formatada'].'</small> </h4>';
            echo '<p class="list-group-item-text">'.$registro['tweet'].'</p>';
            echo '</a>';             
        }
    }else{
        echo "Erro na consulta do Tweet no banco de dados";
    }
    
?>