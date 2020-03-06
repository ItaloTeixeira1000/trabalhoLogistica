
<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  <style type="text/css">
    body, html {
    width: 100%;
    height: 100%;
    font-family: Arial, Tahoma, sans-serif;
    overflow-x: hidden;
  } 
  nav .menuLateral{
    

  }
     ul {
    
    }
    
     ul  #menuLateral:hover{
        background-color: #7fb7e8;
        transition: 0.3s;
     }





  </style>

</head>
<body>
  <header>
    <nav>
      <ul class="nav justify-content-center  " style="background-color: #ffd95e; width: 100%; height: 7%;padding: auto; color: white;">
        <li class="nav-item " >
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
    </nav>


    </header>

    <div class="container-fluid">
        <div class="row">
            <header style="">
              
            <nav class="nav bg-secondary text-white" style="background-color: #494949; width: 170px; height: 100%; overflow: hidden; padding-top: 5%; ">
                    <ul class="nav flex-column">
                       <li class="nav-item" id="menuLateral">
                          <a class="nav-link text-white" href="?pagina=home">Home</a>
                        </li>
                       <li class="nav-item" id="menuLateral">
                        <a class="nav-link text-white " href="?pagina=cadastro">Cadastro</a>
                       </li>
                      <li class="nav-item" id="menuLateral">
                        <a class="nav-link text-white" href="?pagina=produto">Produto</a>
                       </li>
                        <li class="nav-item" id="menuLateral">
                        <a class="nav-link text-white" href="?pagina=estoque">Estoque</a>
                      </li>
                     
                    </ul>
                 </nav>
            </header>
        </div>
    </div>

   


   <div class="container" id="conteudo" style="background-color: green;margin-left: 20%; padding-right: 0px;  ">
   -->
   <!DOCTYPE html>
<html lang="pt-br" style="width: 100%; height: 100%;overflow-x: hidden; margin: 0;padding: 0;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="bootstrap/css/nav.css" rel="stylesheet">
    <link href="bootstrap/css/docs.min.css" rel="stylesheet">
    <style type="text/css">
      #menu-trigger {
          width: 30px;
          height: 20px;
          position: absolute;
          top: 10px;
          margin-left: 20px;
          top: 2.5%;
          left: 0;
          cursor: pointer;
      }
 
        .menu-trigger div {
        width: 30px;
        height: 4px;
        background: rgb(51, 51, 51) none repeat scroll 0% 0%;
        margin-top: 3px;
      }
      li{
        margin-top: 15px; 
         
        width: 224px;
      }
      li:hover{
        background-color: #4286f4;
        transition: 0.5s;
      }
      
     nav .menuLateral {
          background: #333 none repeat scroll 0% 0%;
          width: 185px;
          height: 100%;
          position: absolute; #necessária para o funcionamento
          box-shadow: 1px 2px 3px #DDD;
          left: -100%;  #é com essa propriedade que o menu fica escondido a esquerda
          transition: left .5s;
     }
 
       nav .menuLateral li {
      color: #fff;
      font-size: 20px;
      padding: 18px;
      cursor: pointer;
    }
 
     nav .menuLateral ul {
      position: absolute;
      top: 31px;
    }



      
    </style>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="margin: 0; padding: 0; height: 100%; width: 100%;">
    <div class="container-fluid">
        <header class="row" style="height: 60px; background-color: #f4d442;">
          <div class="menu-trigger" id="menu-trigger">
              <div style=""></div>
              <div style=""></div>
              <div style=""></div>
          </div>
        
        </header>
        

          <div class="row" style="height: 900px; ">
              <nav class="nav bg-secondary col-md-2 menuLateral" name="" style="height: 100%; width: 20%;;">
            <ul class="nav flex-column text-justify" style="padding-top: 20%; ">
                <li class="nav-item " >
                  <a class="nav-link active text-white" href="?pagina=home">Home</a>
                </li>
                
                <li class="nav-item" >
                  <a class="nav-link text-white" href="?pagina=fornecedor">Fornecedores</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link text-white" href="?pagina=produto">Produtos</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link text-white" href="#">Estoque</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link text-white" href="?pagina=usuario">Usuário</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link text-white" href="?pagina=sair">Sair</a>
                </li>
            </ul>
          </nav>
              
   

              <div role="main" class="col-md-10 col-md-push-4 text-justify">
            
              
    