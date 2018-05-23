<?php
	//inserir esse código em algum arquivo de configuração
	function __autoload($nomeClasse){
		var_dump($nomeClasse);
		require_once("$nomeClasse.php");
	}

	$carro = new DelRay();
	$carro->acelerar(80);

?>