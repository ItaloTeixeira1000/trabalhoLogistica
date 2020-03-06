<?php

    include_once 'conexao.php';

    
    $idU= isset($_GET['idU']) == true ? $_GET['idU'] : "";
    $query = "DELETE FROM usuario WHERE idU = $idU";

    if(mysqli_query($link,$query)){
    	header("Location: ../home.php?pagina=usuario");
    }else{
    	echo "Erro na deleção";
    }

    
?>