
<a href="?pagina=produto">Consultar Produto</a>
<table style="border: 1px solid #ccc; width: 100%;">
            <tr> 
                <th>ID do Produto</th>
                <th>Quantidade de Saída</th>
                <th>Descrição da saída</th>
           
                

            </tr>
     

<?php
     while ($linha = mysqli_fetch_array($consultaSaida)) {
        
        echo  "<td>" . $linha['idProduto'] . "</td> <td>".$linha['qtdSaida'] . "</td><td>".$linha['descricao']."</td></tr>";
        
    
?>
   


<?php
    }


?>
</table>

