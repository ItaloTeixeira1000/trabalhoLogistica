<title>Boletim</title>
<?php
		session_start();

		$login = isset($_POST['login']) ? $_POST['login']: "";
		$senha = isset($_POST['senha']) ? $_POST['senha']: "";

		if ($login == "1" and $senha == "1"){

			$_SESSION['logadoP'] = $login;

			header("Location: boletim.php");

			echo "aluno";

		}elseif ($login == "2" and $senha == "2") {

			$_SESSION['logadoP'] = $login;

			header("Location: boletim.php");

			echo "professor";
		}
?>