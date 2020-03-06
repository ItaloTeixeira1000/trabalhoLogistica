<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Aluno OFFLINE</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device=width, initial scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style type="text/css">

    .form-group {
		text-align: fixed;
		size: fixed;
	}

	.form {
		background-size: 100%;
		background-color: white;
		/*background:linear-gradient(to bottom, #33ccff 0%, #ccffff 100%);*/
	}

	a:link { 
		text-decoration:none; 
	} 
	
	.mov {
		margin-left: 50px;
		margin-top: 300px;
	}

	.mov1 {
		margin-left: 20px;

	}
    </style>
</head>
<body>
<form class="form-group">
 	<div class="form-group">
   		<label for="exampleInputEmail1">Email address</label>
    	<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"placeholder="Enter email">
  	</div>
  	<div class="form-group">
   		<label for="exampleInputPassword1">Password</label>
    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  	</div>
    	<input type="radio" name="login" value="al">Aluno
        <input type="radio" name="login" value="pf">Professor
        <br>
  		<button type="submit" class="btn btn-primary">Enviar</button>
</form>
</body>
</html>