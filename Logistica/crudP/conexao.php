<?php
$host = "localhost";
$pass = "abcabcabc123";
$user = "root";
$db = "projeto_logistica";

$link = mysqli_connect($host,$user,$pass,$db);

$query = "SELECT * FROM fornecedor";
$consultaFornecedor = mysqli_query($link,$query);

$query = "SELECT * FROM produto";
$consultaProduto = mysqli_query($link,$query);

$query = "SELECT * FROM usuario";
$consultaUsuario = mysqli_query($link,$query);


?>