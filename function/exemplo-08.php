<?php
	/*
		Declaração de tipos variáveis.
		- Define o tipo de entrada (int) 
		- Recebe um vetor variável de números (...) 
		- Armazena na variável ($valores)
		- Obriga um retorno do tipo float (:float)
	*/
	function soma(float ...$valores): float{
		//Função para soma de valores no array.
		return array_sum($valores);	
	}
	
	echo var_dump(soma(2,2));
	echo "<br>";
	echo soma(25,33);
	echo "<br>";
	//Mesmo que insira o tipo float, como a função só recebe inteiro, pe feito um casting de ponto flutuante para interio.
	echo soma(1.5,3.2);
	echo "<br>";
?>