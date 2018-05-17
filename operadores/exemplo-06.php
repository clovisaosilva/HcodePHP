<?php
	// Imprime somente até o primeiro não ser null
	$a = NULL;
	$b = 10;
	$c = 8;
	
	echo $a ?? $b ?? $c;
?>