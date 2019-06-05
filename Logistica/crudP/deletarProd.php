<?php

    include_once 'conexao.php';

    $idP = $_POST['id'];

    mysqli_query($link,"DELETE FROM produto WHERE idproduto='$idP'");

    header("location: mostrarProd.php");
?>