<?php

    include_once 'conexao.php';
    $id=$_POST['idP'];
    $in=$_POST['in'];
    $precoU=$_POST['precoU'];
    $precoV=$_POST['precoV'];
    $qtd=$_POST['qtd'];
    $nome=$_POST['nome'];

    mysqli_query($link,"UPDATE produto set identificacao='$in', precoUni='$precoU', precoVarejo='$precoV', qtd='$qtd', nome='$nome' where idP='$idP'" );

?>