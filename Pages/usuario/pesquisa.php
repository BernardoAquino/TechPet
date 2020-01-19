<?php
require_once "../../Class/Class_produtos.php";
require_once '../../Inc/footer.php';



$Produtos = new  Produtos();
$listar = $Produtos->listar();
$Buscar = $Produtos->Buscar($_POST["pesquisar"]);

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


                    <li class="nav-item ml-4">
                        <form method="POST" action="pesquisa.php">
                            <a class="nav-link text-person mt-4" href="#"><i class="fa fa-fw fa-search"></i> <input style="width: 150px" type="text" name="pesquisar" placeholder="Procurar"></a>

                        </form>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle text-person mt-4" href="#" id="navbardrop" data-toggle="dropdown">
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

    <div class="content">
        <div id="demo" class="carousel slide" data-ride="carousel"> </div>
        <div class="container ">

            <div class="produtos-title">
                <img style="width: 30px; height: 30px;" src="../../img/patamenor.png"><a>Produtos</a>
                <hr>
            </div>

            <div class="row">
                <?php if ($Buscar) :
                    foreach ($Buscar as $pesquisa) : ?>
                        <div class="col-md-4">
                            <div class="card m-2">
                                <img class="card-img-top" src="../../Assets/Produtos/<?= $pesquisa->Imagem; ?>">
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $pesquisa->Nome; ?></h4>
                                    <p class="card-text"><?php echo $pesquisa->Descricao; ?></p>
                                    <p class="card-text">R$ <?php echo $pesquisa->Valor; ?></p>
                                    <a href="#" class="btn btn-primary">Comprar</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else :
                    echo "Nenhum produto cadastrado" ?>
                <?php endif; ?>

            </div>


        </div>

    </div>

    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
                <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>

            </div>

            <form class="w3-container" action="" method="post">
                <div class="w3-section">
                    <label><b>Usuário e-mail: </b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="email" name="usuario" required>
                    <label><b>Senha: </b></label>
                    <input class="w3-input w3-border" type="password" name="password" minlength="6" maxlenght="20" required>

                    <button class="w3-button  w3-green w3-section w3-padding" name="verificar" type="submit">Login</button>
                    <a href="Pages/cadastro/registro_u.php" class="w3-button w3-right w3-blue w3-section w3-padding">Registrar Usuário</a>
                    <a href="Pages/cadastro/registro_e.php" class="w3-button w3-right w3-blue w3-section w3-padding">Registrar Empresa</a>

                </div>
            </form>

            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
                <span class="w3-right w3-padding w3-hide-small w3-margin-top">Forgot <a href="#">password?</a></span>

            </div>

        </div>
    </div>
    </div>