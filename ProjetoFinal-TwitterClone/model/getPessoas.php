<?php
    session_start();
    
    if(!isset($_SESSION['nome_usuario'])){
		header('Location: index.php?erro=1');
    }

    require_once('conexaoBD.php');

    $nome_pessoa = $_POST['nome_pessoa']; 
    $id_usuario = $_SESSION['id_usuario'];    

    $conexao = new Conexao();
    $link = $conexao->conecta_mysql();    

    $sql = "SELECT u.*, us.* 
            FROM tb_usuarios AS u 
            LEFT JOIN tb_usuario_seguidor AS us 
            ON (us.id_usuario = $id_usuario AND u.id = us.seguindo_id_usuario)
            WHERE nome_usuario like '%$nome_pessoa%' AND id <> $id_usuario";

    $resultado = mysqli_query($link, $sql);

    if ($resultado) {
        while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo '<a href="#" class="list-group-item">';
                echo '<strong>'.$registro['nome_usuario'].'</strong> <small> - '.$registro['email'].'</small> ';
                echo '<p class="list-group-item-text pull-right">';

                    $seguindo_sn = isset($registro['id_usuario_seguidor']) && !empty($registro['id_usuario_seguidor']) ? 'S' : 'N';

                    $btn_seguir_display = 'block';
                    $btn_deixar_seguir_display = 'block';

                    if ($seguindo_sn == 'N') {
                        $btn_deixar_seguir_display = 'none';
                    }else{
                        $btn_seguir_display = 'none'; 
                    }

                    echo '<button type="button" id="btn_seguir_'.$registro['id'].'" style="display:'.$btn_seguir_display.'" class="btn btn-default btn_seguir" data-id_usuario="'.$registro['id'].'">Seguir</button>';
                    echo '<button type="button" id="btn_deixar_seguir_'.$registro['id'].'" style="display:'.$btn_deixar_seguir_display.'" class="btn btn-primary btn_deixar_seguir" data-id_usuario="'.$registro['id'].'">Deixar de Seguir</button>';                    
                    echo '</p>';
                echo '<div class="clearfix"></div>';
            echo '</a>';             
        }
    }else{
        echo "Erro na consulta de usuarios no banco de dados";
    }
    
?>