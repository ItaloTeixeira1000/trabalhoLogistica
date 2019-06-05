<?php
    include_once 'conexao.php';
    $nome = $_POST['nome'];
    $precoU = $_POST['precoU'];
    $precoV = $_POST['precoV'];
    $qtd = $_POST['qtd'];
    $in = $_POST['in'];

    mysqli_query($link, "INSERT INTO produto(identificacao, precoUni, precoVarejo, qtd, nome) VALUES ('$in', '$precoU', '$precoV', '$qtd', '$nome')");
    header("location: ../form_cadastrarP.php");
    
?>