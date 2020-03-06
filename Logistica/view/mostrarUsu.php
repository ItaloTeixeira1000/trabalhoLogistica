<a href="?pagina=cadastroProduto">Cadastrar Produto</a>
<table style="border: 1px solid #ccc; width: 100%;">
            <tr> 
                <th>Id</th>
                <th>Usuario</th>
                <th>Senha</th>
                <th>Data de Nacimento</th>
                <th>Email</th>
                

            </tr>
     

<?php
     while ($linha = mysqli_fetch_array($consultaUsuario)) {
        echo "<tr><td>" . $linha['idU'] . "</td> <td>".$linha['user'] . "</td><td>".$linha['senha']."</td><td>".$linha['dataNascimento']."</td><td>". $linha['email'] . "</td>";
        
    
?>
    <td><a href="deleta_curso.php?idProduto=<?php echo $linha['idproduto']; ?>">Deletar</a></td></tr>

<?php
    }

?>
</table>