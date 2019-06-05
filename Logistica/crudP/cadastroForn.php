<?php

    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $rs = $_POST['razaoSocial'];

    mysqli_query($link, "INSERT INTO fornecedor(nome, cnpj, razaoSocial) VALUES ('$nome', '$cnpj', '$rs')");
    header("location: ../form.cadastrarF.php");
?>