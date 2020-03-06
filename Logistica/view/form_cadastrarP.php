
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

    <form action="crudP/cadastroProd.php" name="formCP" method="POST" class='cadastroUsuario'>
            <div class='form-row'>
                
                <div class='form-group col-md-4'>
                    <label>Nome</label>
                    <input type='text' class='form-control' name='nome' placeholder='Digite seu nome'>

                </div>
                
                <div class='form-group col-md-3'>
                    <label>Preço Unitário</label>
                    <input type='text' class='form-control' name='precoU' placeholder='Digite o preço unitário'>
                </div>

                <div class='form-group col-md-3'>
                    <label>Preço de Varejo</label>
                    <input type='text' class='form-control' name='precoV' placeholder='Digite o preço de varejo'>
                </div>

                <div class='form-group col-md-4'>
                    <label>Quantidade</label>
                    <input type='text' class='form-control' name='qtd' placeholder='Digite a quantidade'>
                </div>

                <div class='form-group col-md-4'>
                    <label>Identificação</label>
                    <input type='text' class='form-control' name='in' placeholder='Digite a identificação'>
                </div>
                <div class='form-group col-md-4'>
                    
                    <input type='submit' class='form-control' name='btn' value='Cadastrar'>
                </div>
            </div>
            
            
        </form>

        <div class='row' >
                
                <div class="col-md-3">
                    <a href="?pagina=produto">Consultar Fornecedores</a>
                </div>
                
            </div>

</body>
</html>