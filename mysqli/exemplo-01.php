<?php
	//PHP 7 - Criando conexão com banco de dados

	$conn = new mysqli("localhost","root","", "dbphp7");
	//Confere se foi bem sucedida a conexão com o banco de dados
	if($conn->connect_error){
		echo "Erro: ".$conn->connect_error;
	}


	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

	$stmt-> bind_param("ss", $login, $pass);

	$login = "user";
	$pass = "12345";

	$stmt->execute();

	$login = "root";
	$pass = "!@#$%";

	$stmt->execute();
?>