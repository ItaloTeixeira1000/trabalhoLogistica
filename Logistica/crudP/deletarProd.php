<?php

    include_once 'conexao.php';

    $idproduto= isset($_GET['idproduto']) == true ? $_GET['idproduto'] : "";
    $query = "DELETE FROM produto WHERE idproduto = $idproduto";

    if(mysqli_query($link,$query)){
    	header("Location: ../home.php?pagina=produto");
    }else{
    	echo "Erro na deleção";
    }

?>