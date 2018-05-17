<?php

	$qualASuaIDade = 18;
	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;
	
	if ($qualASuaIDade < $idadeCrianca){
		echo "Criança";
	} 	else if ($qualASuaIDade < $idadeMaior){
		echo "Adolecente";
	} 	else if ($qualASuaIDade < $idadeMelhor){
		echo "Adulto";
	} 	else {
		echo "Idoso";
	}
	
	echo "<br>";
	
	echo ($qualASuaIDade < $idadeMaior)?"Menor de idade" : "Maior de idade";


?>