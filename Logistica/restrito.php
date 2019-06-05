<!DOCTYPE html>
<html>
<?php

    include_once 'crudP/conexao.php';
   
    session_start();

?>
<head>
    <meta charset='utf-8'>
    
    <title>Restrito</title>
</head>
<body>
<?php
    if(isset($_SESSION['logado'])):
?>
    <h1>ADMIN LOGADO</h1> 
    <a name="sair" href="crudP/logoff.php">Sair</a>
    
    <?php
        else:
    ?>

            <h1>DESLOGADO</h1>
            <a href = "index.php">Logar</a>

    <?php
        endif;
    ?>    

</body>
</html>
