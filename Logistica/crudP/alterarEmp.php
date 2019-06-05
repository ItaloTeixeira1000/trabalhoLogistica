<?php

    include_once 'conexao.php';
    $idE=$_POST['idE'];
    $nome=$_POST['nome'];
    $ramo=$_POST['ramo'];
    $cnpj=$_POST['cnpj'];
    $rs=$_POST['razaoSocial'];
    

    mysqli_query($link,"UPDATE empresa set nome='$nome', ramo='$ramo', cnpj='$cnpj', razaoSocial='$rs' where idE='$ide'" );

?>