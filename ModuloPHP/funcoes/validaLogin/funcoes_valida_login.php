<?

function ValidaLogin($email, $senha){
	
	$email_bd = 'santos.gb01@outlook.com';
	$senha_bd = '1234';

	if ($email == $email_bd && $senha == $senha_bd){
		return true;
	}
	return false;
}

?>