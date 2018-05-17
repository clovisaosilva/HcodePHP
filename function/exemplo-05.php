<?php
	$a = 10;
	
	/*
		& - passagem de parâmetro por referência
	*/
	function trocaValor(&$a){
		return $a += 50;	
	}
	
	echo trocaValor($a);
	echo "<br>";
	echo trocaValor($a);
	echo "<br>";
	echo $a;
?>