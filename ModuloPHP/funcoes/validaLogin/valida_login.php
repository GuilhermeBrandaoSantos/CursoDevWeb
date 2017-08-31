<?
require_once('funcoes_valida_login.php');

$emailUsuario = $_POST['email'];
$senhaUsuario = $_POST['senha'];

$usuarioValidado = ValidaLogin($emailUsuario, $senhaUsuario);

if ($usuarioValidado) {
	echo "Acesso liberado";
}else{
	echo "Acesso negado";
}

?>