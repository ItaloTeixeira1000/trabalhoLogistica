<?php
    include_once 'conexao.php';

    $consulta = $_POST['consulta'];
    $sql = mysqli_query($link, "SELECT * FROM produto WHERE nome like '%$consulta%'");
    
    
    while($vetor = mysqli_fetch_array($sql)){
        $idP = $vetor['idproduto'];
        $nome = $vetor['nome'];
        $precoU = $vetor['precoUni'];
        $precoV = $vetor['precoVarejo'];
        $qtd = $vetor['qtd'];
        $in = $vetor['identificacao'];

        echo"ID: $idP  
        Nome:$nome  
        Preço Unitário:$precoU 
        Preço Varejo:$precoV 
        Quantidade:$qtd
        Identificação:$in<hr>
       ";
    }
?>