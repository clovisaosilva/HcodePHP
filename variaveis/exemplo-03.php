<?php
	$nome = "Hcode";
	$site = 'www.hcode.com.br';
	$ano = 1990;
	$salario = 5500.99;
	$bloqueado = false;
	
	//Tipos compostos
		//array
		$frutas = array("abacaxi","laranja", "manga");
		echo $frutas[2];
		
		//objeto
		$nascimento = new DateTime();
		
		//var_dump($nascimento);
		
	//Variáveis especiais
	$arquivo = fopen("exemplo-03.php", "r");
	
	var_dump($arquivo);

?>