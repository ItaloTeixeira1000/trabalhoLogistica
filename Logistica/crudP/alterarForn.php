<?php

    include_once 'conexao.php';
    $idf=$_POST['idf'];
    $nome=$_POST['nome'];
    $cnpj=$_POST['cnpj'];
    $rs=$_POST['razaoSocial'];
    

    mysqli_query($link,"UPDATE fornecedor set nome='$nome', cnpj='$cnpj', razaoSocial='$rs' where idf='$idf'" );

?>