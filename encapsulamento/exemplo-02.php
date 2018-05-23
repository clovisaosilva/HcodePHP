<?php
	class Pessoa{
		/*
			Public - Todas as classes visualizam
			Protected - Somente a clase e as herdeiras visualizam.
			Private - Somente a classe pai visualiza.
		*/
		public $nome = "Rasmus Lerdof";
		protected $idade = 48;
		private $senha = "123456";

		public function verDados(){
			echo $this->nome . "<br/>";
			echo $this->idade . "<br/>";
			echo $this->senha . "<br/>";
		}
	}

	class Programador extends Pessoa{
		public function verDados(){

			echo get_class($this). "<br>";

			//Como o nome é publico, esse dado é acessado de qualquer local qu tenha instanciado a classe pessoa ou suas classes filhas.
			echo $this->nome . "<br/>";
			//Como a classe Programador herda de Pessoa, a classe e suas herdeiras conseguem acessar o atrubuto.
			echo $this->idade . "<br/>";
			//Como a senha é privada, somente a classe pai consegue acessar o atributo.
			echo $this->senha . "<br/>";
		}
	}


	$objeto = new Programador();
	//echo $objeto->senha . "<br>";
	$objeto->verDados();
?>