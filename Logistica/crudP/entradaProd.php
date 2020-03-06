<?php 
include_once 'conexao.php';
	$idproduto = isset($_POST['idproduto']) == true ? $_POST['idproduto'] : "";
	$nomeProduto = isset($_POST['nomeProduto']) == true ? $_POST['nomeProduto'] : "";
	$nomeFornecedor = isset($_POST['nomeFornecedor']) == true ? $_POST['nomeFornecedor'] : "";
	$qtd = isset($_POST['qtd']) == true ? $_POST['qtd'] : "";


	$query = "SELECT qtd FROM produto WHERE idproduto = '$nomeProduto' ";
	$consultaQtdProduto = mysqli_query($link,$query);

	while ($linha = mysqli_fetch_array($consultaQtdProduto)) {
		$qtdFinal = $qtd + $linha['qtd'];
		$query2 = "UPDATE produto SET qtd = '$qtdFinal' WHERE idproduto='$nomeProduto'";
		$query3 = "INSERT INTO entrada(qtdEntrada, idFornecedor, idProduto ) VALUES ('$qtd','$nomeFornecedor', '$nomeProduto') ";
		mysqli_query($link,$query3);

		if (mysqli_query($link,$query2)) {
			header("location:../home.php?pagina=estoque");
		}else{
			echo "Erro na entrada";
		}
	}

	

	

	
	

 ?>