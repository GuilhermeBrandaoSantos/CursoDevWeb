<?php
    require_once('conexaoBD.php');

    $nome_pessoa = $_POST['nome_pessoa']; 
    $id_usuario = $_SESSION['id_usuario'];    

    $conexao = new Conexao();
    $link = $conexao->conecta_mysql();    

    $sql = "SELECT * FROM tb_usuarios WHERE nome_usuario like '%$nome_pessoa%' AND id <> $id_usuario ";

    $resultado = mysqli_query($link, $sql);
    $registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

?>
<a href="#" class="list-group-item">
<strong><?$registro['nome_usuario']?></strong> <small> - <?$registro['email']?></small> 
</a>