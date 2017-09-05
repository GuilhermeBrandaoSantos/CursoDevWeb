<?php 

	Class Pessoa{
		
		private $nome;

		public function Correr()
		{
			echo $this->nome . " Correndo<br>";
		}

		function __construct($parametro_nome){
			$this->nome = $parametro_nome;
			echo $this->nome;
		}

		function __destruct(){
			echo '__destruct ok';
		}
	}	

	$pessoa = new Pessoa('Guilherme');
	$pessoa->correr();

 ?>