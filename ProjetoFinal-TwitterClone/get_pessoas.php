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

    $sql = "SELECT * FROM tb_usuarios WHERE nome_usuario = '$nome_pessoa' AND id <> $id_usuario ";

    $resultado = mysqli_query($link, $sql);

    if ($resultado) {
        while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo '<a href="#" class="list-group-item">';
                echo '<strong>Nome</strong> <small> - Email</small> ';
            echo '</a>';             
        }
    }else{
        echo "Erro na consulta de usuarios no banco de dados";
    }
    
?>