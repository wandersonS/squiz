<?php
	include_once('conexao.php');
	$Nome = $_POST['Nome'];
	$Sobrenome = $_POST['Sobrenome'];
	$DataNascimento = $_POST['DataNascimento'];
	$Sexo = $_POST['Sexo'];
	$Email = $_POST['Email'];
	$Senha = $_POST['Senha'];	
	$inserir=$pdo->prepare("INSERT INTO usuario(email,senha,nome,data_nascimento,sexo,sobrenome) values ('$Email','$Senha','$Nome','$DataNascimento','$Sexo','$Sobrenome')");
	$inserir -> execute();
?>