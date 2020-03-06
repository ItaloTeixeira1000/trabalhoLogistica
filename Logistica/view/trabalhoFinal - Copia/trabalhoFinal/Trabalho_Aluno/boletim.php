<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
</head>
<style>
	table {
 		font-family: arial, sans-serif;
 		 border-collapse: collapse;
  		width: 100%;
	}

	td, th {
	 	border: 1px solid #dddddd;
  		text-align: left;
  		padding: 8px;
	}

	tr:nth-child(even) {
 	 	background-color: #dddddd;

	}
</style>

	<?php
		$Matérias;
		$Nota1;
		$Nota2;
		$Nota3;
		$Nota4;
		$Nota5;
		$Nota6;
		$Nota7;
		$Nota8;
		$Nota9;
		$Nota10;
		$Nota11;
		$Nota12;
		$Nota13;
		$Nota14;
		$Nota15;
		$Nota16;
		$Média1;
		$Média2;
		$Média3;
		$Média4;

		$Espanhol;
		$Nota1 = 6.8;
		$Nota2 = 9.3;
		$Nota3 = 8.1;
		$Nota4 = 5.6;
		$Média1 = ($Nota1+$Nota2+$Nota3+$Nota4)/4;

		$Física;
		$Nota5 = 7.7;
		$Nota6 = 9.6;
		$Nota7 = 9.9;
		$Nota8 = 6.1;
		$Média2 = ($Nota5+$Nota6+$Nota7+$Nota8)/4;

		$Geografia;
		$Nota9 = 9.2;
		$Nota10 = 9.1;
		$Nota11 = 8.0;
		$Nota12 = 10;
		$Média3 = ($Nota9+$Nota10+$Nota11+$Nota12)/4;

		$Matemática;
		$Nota13 = 8.8;
		$Nota14 = 9.0;
		$Nota15 = 8.3;
		$Nota16 = 9.5;
		$Média4 = ($Nota13+$Nota14+$Nota15+$Nota16)/4;
	?>
<body>
		<table>
			<tr>
				<th>Matérias</th>
				<th>Nota1</th>
				<th>Nota2</th>
				<th>Nota3</th>
				<th>Nota4</th>
				<th>Média</th>
			</tr>
			<tr>
				<td>Espanhol</td>
				<td><?php echo($Nota1)?></td>
				<td><?php echo($Nota2)?></td>
				<td><?php echo($Nota3)?></td>
				<td><?php echo($Nota4)?></td>
				<td><?php echo($Média1)?></td>

			</tr>
			<tr>
				<td>Física</td>
				<td><?php echo($Nota5)?></td>
				<td><?php echo($Nota6)?></td>
				<td><?php echo($Nota7)?></td>
				<td><?php echo($Nota8)?></td>
				<td><?php echo($Média2)?></td>
			</tr>
			<tr>
				<td>Geografia</td>
				<td><?php echo($Nota9)?></td>
				<td><?php echo($Nota10)?></td>
				<td><?php echo($Nota11)?></td>
				<td><?php echo($Nota12)?></td>
				<td><?php echo($Média3)?></td>
			</tr>
			<tr>
				<td>Matemática</td>
				<td><?php echo($Nota13)?></td>
				<td><?php echo($Nota14)?></td>
				<td><?php echo($Nota15)?></td>
				<td><?php echo($Nota16)?></td>
				<td><?php echo($Média4)?></td>
			</tr>
		</table>
</body>
</html>




