<?php
	//recebe uma variável da url e imprime
	$nome = $_GET["a"];
 	var_dump($nome);
	//Faz um casting (converte para int).
	$nome = (int) $_GET["a"];
	var_dump($nome);
	
	$ip = "<br/>".$_SERVER["SCRIPT_NAME"];
	echo $ip;
?>