<?php
header("Content-type:text/html; charset=utf8");
require_once "../../Class/Class_usuario.php";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery-1.2.6.pack.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../img/Logoo.png" />
    <title>TechPet</title>
</head>

<body>

<nav class="navbar navbar-expand-md bg-person">

  <div class="container-fluid nav-text">
      <a class="navbar-brand text-person" href="../../Pages/usuario/index_u.php"><img class="logo-nav" src="../../img/LogoContorno.png"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon "><i class="fa fa-bars" style="font-size:36px;color:#00b7f1"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            
            <ul class="navbar-nav mr-auto">
            
                <li class="nav-item ml-4">
                    <a class="nav-link text-person" href="../../Pages/usuario/index_u.php"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>

                <li class="nav-item ml-4">
                    <a class="nav-link text-person" href="../../Pages/usuario/pet.php"><i class="fa fa-paw"></i> Seus Pets</a>
                </li>

                <li class="nav-item ml-4">
                    <a class="nav-link text-person" href="../../Pages/usuario/servicos_u.php"><i class="fa fa-briefcase"></i> Serviços</a>
                </li>

                <li class="nav-item ml-4">
                    <a  class="nav-link text-person" href="../../Pages/usuario/produtos.php"><i class="fa fa-fw fa-shopping-bag"></i> Produtos</a>
                </li>

                <li class="nav-item ml-4">
                    <a  class="nav-link text-person" href="../../Pages/Fale/contato.php"><i class="fa fa-fw fa-envelope"></i> Contato</a>
                </li>


                
            </ul>

            <ul class="navbar-nav ml-auto">

           
            
                <li class="nav-item dropdown">


                    <a class="nav-link dropdown-toggle text-person" href="#" id="navbardrop" data-toggle="dropdown">
                            <?php
                            if(isset($_SESSION["nomeUsuario"])) {
                                echo $_SESSION["nomeUsuario"];
                            }else{
                                header("location: ../../");
                            }
                                
                            ?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../../Model/logout.php">Sair</a>
                    </div>
                </li>  
                    
               
            </ul>
        </div>
            
    </div> 
   
</nav>

