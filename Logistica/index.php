<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="bootstrap/css/nav.css" rel="stylesheet">
    <link href="bootstrap/css/docs.min.css" rel="stylesheet">
   
<?php

?>
</head>
<body>
	<!--
    <form action="crudP/logar.php" name="formLogar" method="POST">
        Usuário:<input type="text" name="user">
        Senha:<input type="password" name="senha">
        <input type="submit" value="Logar">
    </form>
-->



    <div class="container">
    <div class="row" style="margin-top: 10%; margin-bottom: 10%;">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" action="crudP/logar.php" name="formLogar" method="POST">
              <div class="form-label-group">
              	<label for="inputEmail">Email </label>
                <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Email address" required="" autofocus="">
                
              </div>

              <div class="form-label-group">
              	 <label for="inputPassword">Senha</label>
                <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Password" required="">
               
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
              <hr class="my-4">
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>