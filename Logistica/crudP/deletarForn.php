<?php

    include_once 'conexao.php';

    $idf = $_POST['id'];

    mysqli_query($link,"DELETE FROM fornecedor WHERE idf='$idf'");

    header("location: mostrarForn.php");
?>