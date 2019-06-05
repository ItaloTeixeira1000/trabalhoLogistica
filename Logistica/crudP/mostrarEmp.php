<?php
    include_once 'conexao.php';

    $consulta = $_POST['consulta'];
    $sql = mysqli_query($link, "SELECT * FROM empresa WHERE nome like '%$consulta%'");
    
    
    while($vetor = mysqli_fetch_array($sql)){ 

        $idF= $vetor['idF'];
        $nome = $vetor['nome'];
        $ramo = $vetor['ramo'];
        $cnpj = $vetor['cnpj'];
        $rs = $vetor['razaoSocial'];

        echo"ID: $idf
        Nome: $nome
        Ramo: $ramo
        CNPJ: $cnpj
        Email: $rs<hr> ";



     }
    ?>