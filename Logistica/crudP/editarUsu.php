 
 <?php
	include_once 'conexao.php';
	$idU = isset($_POST['idU']) == true ? $_POST['idU'] : "";
	$user = isset($_POST['user']) == true ? $_POST['user'] : "";
	$senha = isset($_POST['senha']) == true ? $_POST['senha'] : "";
	$email = isset($_POST['email']) == true ? $_POST['email'] : "";
	$dataNascimento = isset($_POST['dataNascimento']) == true ? $_POST['dataNascimento'] : "";


	$query = "UPDATE usuario SET user = '$user', senha = '$senha',email = '$email', dataNascimento = '$dataNascimento' WHERE idU='$idU'";

	if (mysqli_query($link,$query)) {
		header("location:../home.php?pagina=usuario");
	}else{
		echo "Erro na atualização";
	}



