<?php
	include_once 'conexao.php';

	$user = isset($_POST['user']) == true ? $_POST['user'] : "";

	$senha = isset($_POST['senha']) == true ? $_POST['senha'] : "";
	$email = isset($_POST['email']) == true ? $_POST['email'] : "";
	$dataNascimento = isset($_POST['dataNascimento']) == true ? $_POST['dataNascimento'] : "";

	$query = "INSERT INTO usuario(user,senha,dataNascimento,email) VALUES ('$user','$senha','$dataNascimento','$email')";
	if (mysqli_query($link,$query)) {
		header('Location: ../home.php?pagina=cadastroUsu');
	}else{
		echo "Erro no cadastro ";
	}