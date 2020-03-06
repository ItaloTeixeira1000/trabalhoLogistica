<a href="?pagina=cadastroFornecedor">Cadastrar Fornecedor</a>
<table style="border: 1px solid #ccc; width: 100%;">
            <tr> 
                <th>Id</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Razão Social</th>
                

            </tr>
     

<?php
     while ($linha = mysqli_fetch_array($consultaFornecedor)) {
        echo "<tr><td>" . $linha['idf'] . "</td> <td>".$linha['nome'] . "</td><td>".$linha['cnpj']."</td><td>".$linha['razaoSocial']."</td>";
        
    
?>
    <td><a href="crudP/deletarForn.php?idFornecedor=<?php echo $linha['idf']; ?>">Deletar</a></td></tr>

<?php
    }

?>
</table>