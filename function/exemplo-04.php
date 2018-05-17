<?php
	function ola(){
		//recebe todos (array) os argumentos que são passados pela chamada da função.
		$argumentos = func_get_args();	
		return $argumentos;
	}
	var_dump(ola("Bom dia"));
?>