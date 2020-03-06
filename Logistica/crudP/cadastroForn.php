<?php

    include_once 'conexao.php';

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $rs = $_POST['razaoSocial'];

    if(mysqli_query($link, "INSERT INTO fornecedor(nome, cnpj, razaoSocial) VALUES ('$nome', '$cnpj', '$rs')")){
        header("location:../home.php?pagina=cadastroFornecedor");
    }else{
        echo "erro no cadastro";
    }
   
?>