<?php
	include_once 'crudP/conexao.php';
	include_once 'header.php';


$pagina = isset($_GET['pagina']) == true ? $_GET['pagina'] : "";

if (isset($_GET['pagina'])) {
	$pagina = $_GET['pagina'];
}



	switch ($pagina) {
		
		case 'usuario':
			include_once 'view/mostrarUsu.php';
			break;
		case 'cadastroUsuario':
				include_once 'view/form_cadastrarUsu.php';
				break;	
		case 'home':
			include_once 'principal.php';	
		case 'estoque':
			include_once 'view/estoque.php';
			break;
		case 'produto':
				include_once 'view/mostrarProd.php';
				break;
		case 'cadastroProduto':
				include_once 'view/form_cadastrarP.php';
				break;		
		case 'fornecedor':
				include_once 'view/mostrarForn.php';
				break;
		case 'cadastroFornecedor':
					include_once 'view/form_cadastrarF.php';
					break;		
		case 'mostrarForn':
				include_once 'crudP/mostrarForn.php';
				break;		
		case 'cadastroEmpresa':
				include_once 'view/form_cadastrarE.php';
				break;
		case 'sair':
			include_once 'crudP/logoff.php';						
		default:
			include 'principal.php';
			break;			
	}

	include_once 'footer.php';
?>
