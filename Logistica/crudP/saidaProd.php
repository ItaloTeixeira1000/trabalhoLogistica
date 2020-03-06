<?php 
include_once 'conexao.php';
	$idproduto = isset($_POST['idproduto']) == true ? $_POST['idproduto'] : "";
	$nomeProduto = isset($_POST['nomeProduto']) == true ? $_POST['nomeProduto'] : "";
	$nome = isset($_POST['nome']) == true ? $_POST['nome'] : "";
	$qtd = isset($_POST['qtd']) == true ? $_POST['qtd'] : "";
	$descricao = isset($_POST['descricao']) == true ? $_POST['descricao'] : "";

	$query = "SELECT qtd FROM produto WHERE idproduto = '$nomeProduto' ";
	$consultaQtdProduto = mysqli_query($link,$query);

	while ($linha = mysqli_fetch_array($consultaQtdProduto)) {
		$qtdFinal = $linha['qtd'] - $qtd;
		$query2 = "UPDATE produto SET qtd = '$qtdFinal' WHERE idproduto='$nomeProduto'";
		$query3 = "INSERT INTO saida(qtdSaida, descricao, idProduto ) VALUES ('$qtd','$descricao','$nomeProduto') ";
		mysqli_query($link,$query3);
		
		if (mysqli_query($link,$query2)) {
			header("location:../home.php?pagina=estoque");
		}else{
			echo "Erro na entrada";
		}
	}

 ?>