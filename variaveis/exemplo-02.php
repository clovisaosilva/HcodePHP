<?php
	/*
		$anoNascimento = 1990;
		$nomeCompleto = "";	
	*/
	
	//Na linha de baixo temos o nome de uma variável com número.
	$nome1 = "João";
	$sobrenome = "Rangel";
	
	//Concatenação de variáveis.
	$nomeCompleto = $nome1." ".$sobrenome;
	
	echo $nomeCompleto;
	
	exit;
	
	echo "<br/>";
	
	//deleta a variável $nome1
	unset($nome1);
	
	//testa se a variável existe, caso exista, ela vai imprimir a variável.
	if (isset ($nome1)){
		echo $nome1; 
	}
	
?>