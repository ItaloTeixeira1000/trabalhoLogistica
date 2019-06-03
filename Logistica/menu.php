<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  <style type="text/css">
    body, html {
    width: 100%;
    height: 100%;
    font-family: Arial, Tahoma, sans-serif;
    overflow-x: hidden;
  }
     #menuLateral{
      width: 300px;
    }
     ul  #menuLateral:hover{
        background-color: #7fb7e8;
        transition: 0.3s;
     }




  </style>

</head>
<body>
  <ul class="nav justify-content-center " style="background-color: #ffd95e; width: 100%; height: 7%; color: white;">
    <li class="nav-item " ">
      <a class="nav-link text-white font-weight-bold" href="#">Active</a>
    </li>
    <li class="nav-item" ">
      <a class="nav-link text-white font-weight-bold" href="#">Link</a>
    </li>
    <li class="nav-item" ">
      <a class="nav-link text-white font-weight-bold" href="#">Link</a>
    </li>
    <li class="nav-item" ">
      <a class="nav-link text-white font-weight-bold" href="#">Disabled</a>
    </li>
  </ul>



<nav class="nav bg-secondary text-white" style="background-color: #494949; width: 170px; height: 100%; overflow: hidden; padding-top: 5%; ">
<ul class="nav flex-column">
    <li class="nav-item" id="menuLateral">
      <a class="nav-link text-white " href="?pagina=cadastro">CADASTRO</a>
    </li>
    <li class="nav-item" id="menuLateral">
      <a class="nav-link text-white" href="?pagina=home">home</a>
    </li>
    <li class="nav-item" id="menuLateral">
      <a class="nav-link text-white" href="#">Link</a>
    </li>
    <li class="nav-item" id="menuLateral">
      <a class="nav-link text-white" href="#">Disabled</a>
    </li>
  </ul>
</nav> 