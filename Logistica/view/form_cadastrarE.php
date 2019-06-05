<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    
    <title>Cadastro Empresas</title>
</head>
<body>
	<!--
<form action="crudP/cadastroEmp.php" name="cf" method="POST" >

Nome:<input type="text" name="nome">
CNPJ:<input type="texte" name="cnpj">
Ramo:<input type="text" name="ramo">
Razão Social:<input type="text" name="razaoSocial">
<input type="submit" value="Cadastrar">
-->

<form class='cadastroUsuario' action="crudP/cadastroEmp.php" name="cf" method="POST">
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
					<label>Ramo</label>
					<input type='text' class='form-control' name='ramo' placeholder='Digite o ramo da Empresa'>
				</div>

				<div class='form-group col-md-4'>
					<label>Razão Social</label>
					<input type='text' class='form-control' name='razaoSocial' placeholder='Digite a razão social'>
				</div>
			</div>
			
			

</form>
</body>
</html>