<?php
	function ola($texto, $periodo = "Bom dia"){
		return "olá $texto! $periodo!<br>";
	}
	echo ola("mundo");
	echo ola("", "Boa Noite");
	echo ola("Gláucio", "Bom Dia");
	echo ola("João", "Boa tarde.");
?>