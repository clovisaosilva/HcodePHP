<?php
	//Conexão para o MySQL
	//$conexao = new PDO("mysql:dbname=dbphp7;hostname=localhost","root","");

	//COnexão para o SQLServer
	$conexao = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");

	$stmt = $conexao->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($results as $row) {
		foreach ($row as $key => $value) {
			echo "<strong>".$key.": </strong>".$value."<br/>";
		}

		echo "===================================================<br>";
	}
;?>