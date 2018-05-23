<?php
	class Pessoa{
		/*Atributo*/
		public $nome;

		/*Método*/
		public function falar(){
			//Dentro do método o $ só é utilizado no this
			return "O meu nome é ".$this->nome;
		}
	}

	$glaucio = new Pessoa();
	$glaucio->nome = "Gláucio Daniel";
	echo $glaucio->falar();
?>