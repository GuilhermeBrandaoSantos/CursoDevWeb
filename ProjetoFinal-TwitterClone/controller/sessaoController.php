<?php
session_start();

	if(!isset($_SESSION['nome_usuario'])){
		header('Location: index.php?erro=1');
    }
    
?>