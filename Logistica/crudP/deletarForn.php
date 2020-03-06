<?php

    include_once 'conexao.php';

    
    $idf= isset($_GET['idFornecedor']) == true ? $_GET['idFornecedor'] : "";
    $query = "DELETE FROM fornecedor WHERE idf = $idf";

    if(mysqli_query($link,$query)){
    	header("Location: ../home.php?pagina=fornecedor");
    }else{
    	echo "Erro na deleção";
    }

    
?>