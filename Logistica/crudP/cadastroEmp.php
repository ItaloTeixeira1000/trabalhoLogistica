<?php

    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $rs = $_POST['razaoSocial'];
    $ramo = $_POST['ramo'];

    mysqli_query($link, "INSERT INTO empresa(nome, ramo, cnpj, razaoSocial) VALUES ('$nome', '$ramo', '$cnpj', '$rs')");
    header("location: ../form.cadastrarE.php");
?>