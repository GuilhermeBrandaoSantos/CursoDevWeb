<?
class Veiculo{
	
	private $placa;
	private $cor;
	private $tipo;

	public function setPlaca($name_placa){

		if (ctype_alnum($name_placa)) {
			echo 'Placa OK!';
    	}else {
        		echo "Digite apenas letras e números";
        	}

		$this->placa = $name_placa;
	}
	public function getPlaca(){

		return $this->placa;
	}
}

$veiculo = new Veiculo();
$veiculo->setPlaca('GBS12@');
echo "<br><br>".$veiculo->getPlaca();
?>