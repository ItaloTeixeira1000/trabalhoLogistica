<?php

    include_once 'conexao.php';
    session_start();
    if(($_POST['user'] =="admin") && ($_POST['senha'] =="admin")){
        $_SESSION['logado'] =true;
        header("location: ../home.php");
    }
    if(empty($_POST['user']) || empty('senha')){
        $_SESSION['empty'] = true;
        header("location: ../index.php");
    }


?>