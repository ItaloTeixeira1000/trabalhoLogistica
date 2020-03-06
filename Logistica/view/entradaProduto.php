
    <!--
    <h1>Cadastro de Produtos</h1>
    <form action="crudP/cadastroProd.php" name="formCP" method="POST"> 
        Nome:<input type="text" name="nome"><br>
        Preço Unitário:<input type="text" name="precoU"><br>
        Preço Varejo:<input type="text" name="precoV"><br>
        Quantidade:<input type="text" name="qtd"><br>
        Identificação:<input type="text" name="in" placeholder="somente números"><br>
        <input type="submit" value="Cadastrar">


    </form>
-->

    <form action="crudP/entradaProd.php" name="formCP" method="POST" class='cadastroUsuario'>
            <div class='form-row'>
                
                <div class='form-group col-md-3'>
                  <select name="nomeProduto">
                        <option>Selecione um produto</option>
                        <?php
                            while ($linha = mysqli_fetch_array($consultaProduto)) {
                                echo "<option value='" . $linha['idproduto'] . "'>" . $linha['nome'] . "</option>";

                            }
                        ?>
        </select>
                    

                </div>

                <div class='form-group col-md-3'>
                  <select name="nomeFornecedor">
                        <option>Selecione o fornecedor</option>
                        <?php
                            while ($linha = mysqli_fetch_array($consultaFornecedor)) {
                                echo "<option value='" . $linha['idf'] . "'>" . $linha['nome'] . "</option>";

                            }
                        ?>
        </select>
                    

                </div>
                
                <div class='form-group col-md-4'>
                    <label>Quantidade de entrada</label>
                    <input type='text' class='form-control' name='qtd' placeholder='Digite a quantidade de produtos'>
                </div>
                <div class='form-group col-md-3'>
                    
                    
                </div>

                
           
                
                <div class="form-group col-md-3">
                    <input type="submit" class="form-control" value="Adicionar" name="">
                </div>
                <div class='form-group col-md-3'>
                    
                    
                </div>
                <div class='form-group col-md-3'>
                    
                    
                </div>
                
            
            
        </form>
        <div class='row' >
                
                <div class="col-md-9">
                    <a href="?pagina=produto">Consultar Fornecedores</a>
                </div>
                
            </div>

        

            

