
	<!--
    <form action="crudP/cadastroForn.php" name="cf" method="POST" >

        Nome:<input type="text" name="nome">
        CNPJ:<input type="text" name="cnpj">
        Razão Social:<input type="text" name="razaoSocial">
        <input type="submit" value="Cadastrar">
    </form>
-->


	
		<form action="crudP/cadastroForn.php" name="cf" method="POST" class='cadastroUsuario'>
			<div class='form-row'>
				
				<div class='form-group col-md-4'>
					<label>Nome</label>
					<input type='text' class='form-control' name='nome' placeholder='Digite o nome da empresa'>

				</div>
				
				<div class='form-group col-md-3'>
					<label>CNPJ</label>
					<input type='text' class='form-control' name='cnpj' placeholder='Digite o CNPJ'>
				</div>

				<div class='form-group col-md-3'>
					<label>Razão Social</label>
					<input type='text' class='form-control' name='razaoSocial' placeholder='Digite a razão social'>
				</div>
				<div class='form-group col-md-3'>
					
					<input type='submit' class='form-control' name='Enviar' value="Cadastrar">
				</div>

			</div>

		</form>
		
		
			<div class='row' >
				
				<div class="col-md-3">
					<a href="?pagina=fornecedor">Consultar Fornecedores</a>
				</div>
				
			</div>
		

	
	

	


</body>
</html>