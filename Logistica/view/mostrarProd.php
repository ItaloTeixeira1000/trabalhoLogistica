<a href="?pagina=cadastroProduto">Cadastrar Produto</a>
<table style="border: 1px solid #ccc; width: 100%;">
            <tr> 
                <th>Id</th>
                <th>Identificação</th>
                <th>Nome</th>
                <th>Preço Unit.</th>
                <th>Preço Varejo</th>
                

            </tr>
     

<?php
     while ($linha = mysqli_fetch_array($consultaProduto)) {
        echo "<tr><td>" . $linha['idproduto'] . "</td> <td>".$linha['identificacao'] . "</td><td>".$linha['nome']."</td><td>".$linha['precoUni']."</td><td>". $linha['precoVarejo'] . "</td><td>" . $linha['qtd'] . "</td>";
        
    
?>
    <td><a href="crudP/deletarProd.php?idproduto=<?php echo $linha['idproduto']; ?>">Deletar</a></td></tr>

<?php
    }

?>
</table>