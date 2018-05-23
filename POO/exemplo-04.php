<?php
	class Endereco{
		private $logradouro;
		private $numero;
		private $cidade;

		/*
			Método mégico do construtuor, sobrescreve o construtor original da classe permitindo sobrecarregar a criação da classe.
			No exemplo abaixo pode ser visto que ao clriar a classe, já é solicitada as informações dos atributos e setados os valores nos atibutos originais da classe.
		*/
		public function __construct($logradouro,$numero,$cidade){
			$this->logradouro = $logradouro;
			$this->numero = $numero;
			$this->cidade = $cidade;
		}

		/*
			Método mégico do destrutor, sobrescreve o destrutor original da classe permitindo sobrecarregar a destrução da classe.
			Pode ser utilizado por exemplo para a criação de um log, ou finalizar um banco de dados, ou gerar alguma ação quando a instância é finalizada.
		*/
		public function __destruct(){
			//var_dump("Destruir");
		}

		/*
			Sobrecarrega o toStrig, retornando as informações da forma desejada.
			No exemplo abaixo, é retornada todo o endereço concatenado.
		*/
		public function __toString(){
			return $this->logradouro.", ".$this->numero.", ".$this->cidade;
		}
	}

	$meuEndereco = new Endereco("Qs 10 Conjunto 7A","26","Brasília");

	echo $meuEndereco;

?>