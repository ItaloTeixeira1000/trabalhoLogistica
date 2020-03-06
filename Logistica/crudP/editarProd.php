 
 <?php
	include_once 'conexao.php';
	$idproduto = isset($_POST['idproduto']) == true ? $_POST['idproduto'] : "";
	$nome = isset($_POST['nome']) == true ? $_POST['nome'] : "";
	$precoUni = isset($_POST['precoUni']) == true ? $_POST['precoUni'] : "";
	$precoVarejo = isset($_POST['precoVarejo']) == true ? $_POST['precoVarejo'] : "";
	$qtd = isset($_POST['qtd']) == true ? $_POST['qtd'] : "";
	$identificacao = isset($_POST['identificacao']) == true ? $_POST['identificacao'] : "";


	$query = "UPDATE produto SET nome = '$nome', precoUni = '$precoUni', precoVarejo = '$precoVarejo', qtd = '$qtd', identificacao = '$identificacao' WHERE idproduto='$idproduto'";

	if (mysqli_query($link,$query)) {
		header("location:../home.php?pagina=produto");
	}else{
		echo "Erro na atualização";
	}



