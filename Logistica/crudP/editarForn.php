

 <?php
	include_once 'conexao.php';
	$idf = isset($_POST['idf']) == true ? $_POST['idf'] : "";
	$nome = isset($_POST['nome']) == true ? $_POST['nome'] : "";
	$cnpj = isset($_POST['cnpj']) == true ? $_POST['cnpj'] : "";
	$razaoSocial = isset($_POST['razaoSocial']) == true ? $_POST['razaoSocial'] : "";



	$query = "UPDATE fornecedor SET nome = '$nome', cnpj = '$cnpj', razaoSocial = '$razaoSocial' WHERE idf='$idf'";

	if (mysqli_query($link,$query)) {
		header("location:../home.php?pagina=fornecedor");
	}else{
		echo "Erro na atualização";
	}
	?>
