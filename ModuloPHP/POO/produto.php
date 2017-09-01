<?
class Produto{
	
	var $nome;
	var $preco;

	function setNome($nome_produto){
		$this->nome = $nome_produto;	
	}
	function getNome(){
		return $this->nome;
	}
	function setPreco($preco_produto){
		$this->preco = $preco_produto;	
	}
	function getPreco(){
		return $this->preco;
	}
}

$produto = new Produto();
	$nome_produto = 'Cadeira';
	$preco_produto = '40.00';
	
	$produto->setNome($nome_produto);
	$produto->setPreco($preco_produto);

	echo "<h3>PRODUTO:".$produto->getNome();."<br>"
	echo "<h3>PREÇO R$:</h3>".$produto->getPreco();
?>