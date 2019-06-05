<?php

    include_once 'conexao.php';

    $ide = $_POST['id'];

    mysqli_query($link,"DELETE FROM empresa WHERE idE='$ide'");

    header("location: mostrarForn.php");
?>