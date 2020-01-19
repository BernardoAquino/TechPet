<?php
header("Content-type:text/html; charset=utf8");
require_once "../../Class/Class_usuario.php";


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                        <a class="nav-link text-person" href="../../Pages/usuario/produtos.php"><i class="fa fa-fw fa-shopping-bag"></i> Produtos</a>
                    </li>

                    <li class="nav-item ml-4">
                        <a class="nav-link text-person" href="../../Pages/Fale/contato.php"><i class="fa fa-fw fa-envelope"></i> Contato</a>
                    </li>



                </ul>

                <ul class="navbar-nav ml-auto">



                    <li class="nav-item dropdown">


                        <a class="nav-link dropdown-toggle text-person" href="#" id="navbardrop" data-toggle="dropdown">
                            <?php
                            if (isset($_SESSION["nomeUsuario"])) {
                                echo $_SESSION["nomeUsuario"];
                            } else {
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