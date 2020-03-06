
<a href="?pagina=produto">Consultar Produto</a>
<table style="border: 1px solid #ccc; width: 100%;">
            <tr> 
                <th>ID do Produto</th>
                <th>Nome do fornecedor</th>
                <th>Quantidade de entrada</th>
           
                

            </tr>
     

<?php
     while ($linha = mysqli_fetch_array($consultaEntrada)) {
        
        echo  "<td>" . $linha['idProduto'] . "</td> <td>".$linha['nome'] . "</td><td>".$linha['qtdEntrada']."</td></tr>";
        
    
?>
   


<?php
    }


?>
</table>

