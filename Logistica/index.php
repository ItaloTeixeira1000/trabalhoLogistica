<?php
	include_once 'header.php';


$pagina = isset($_GET['pagina']) == true ? $_GET['pagina'] : "";
	switch ($pagina) {
		case 'home':
			include_once 'view/home.php';
			break;
		case 'cadastroCliente':
			include_once 'view/cadastroCliente.php';
			break;
		case 'estoque':
			include_once 'view/estoque.php';
			break;
		case 'cadastroProduto':
				include_once 'view/form_cadastrarP.php';
				break;
		case 'cadastroFornecedor':
				include_once 'view/form_cadastrarF.php';
				break;
		case 'cadastroEmpresa':
				include_once 'view/form_cadastrarE.php';
				break;				
		default:
			include 'view/home.php';
			break;			
	}

	include_once 'footer.php';
?>
