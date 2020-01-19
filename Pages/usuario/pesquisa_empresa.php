<?php

require_once '../../Inc/footer.php';



require_once '../../Class/Class_empresa.php';
require_once '../../Class/Class_pet.php';
require_once '../../Class/Class_empresa.php';


$Empresa = new Empresa();
$listarEmpresa = $Empresa->listarTodos();
$Buscar = $Empresa->Buscar($_POST["pesquisar"]);

$Pet = new Pet();
$listarPet = $Pet->listar();



if (isset($_POST["marcarTosa"])) {
    if (isset($_POST["nomePet"]) && isset($_POST["cnpjtosa"]) && isset($_POST["hora"])) {
        $_SESSION["Tipo"] = "Tosa";
        $Servicos->inserir();
    }
} else if (isset($_POST["marcarConsulta"])) {
    if (isset($_POST["nomePet"]) && isset($_POST["cnpjconsulta"]) && isset($_POST["hora"])) {
        $_SESSION["Tipo"] = "Consulta";
        $Servicos->inserir();
    }
}
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
                        <form method="POST" action="pesquisa_empresa.php">
                            <a class="nav-link text-person mt-4" href="#"><i class="fa fa-fw fa-search"></i> <input style="width: 150px" type="text" name="pesquisar" placeholder="Pesquisar"></a>
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
        <div class="container mt-5">

            <div class="produtos-title">
                <img style="width: 30px; height: 30px;" src="../../img/patamenor.png"><a>Serviços</a>
                <hr>
            </div>

            <div class="row">
                <?php if ($Buscar) :
                    foreach ($Buscar as $pesquisa) : ?>
                        <div class="col-md-6">
                            <li class="list-group-item mt-3">
                                <div class="w3-card-4">
                                    <header class="w3-container w3-light-grey">
                                        <h3><?= $pesquisa->Nome; ?></h3>
                                    </header>
                                    <div class="w3-center">
                                        <img src="../../Assets/Empresa/<?= $pesquisa->Foto; ?>" class="img-responsive" alt="Avatar" style="widht: 100%; height: 100px;">
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a class="btn btn-block btn-info text-white butao mb-2 mt-2" data-toggle="modal" data-target="#tosa" onclick="tosa('<?= $pesquisa->CNPJ; ?>')">Marcar Banho/Tosa</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a data-toggle="modal" data-target="#consulta" class="btn btn-info btn-block text-white butao mb-2 mt-2" onclick="consulta('<?= $pesquisa->CNPJ; ?>')">Marcar Consulta</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>Essa empresa não está cadastrada!!!</p>
                <?php endif; ?>

            </div>


        </div>

    </div>
    <div id="tosa" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form action="agenda_u.php" method="post">
                        <div>
                            <label><b>Marcar tosa para o dia</b></label>
                            <input class="form-group" type="date" name="data" required>
                            <label><b>Marcar tosa para o horário</b></label>
                            <input class="form-group" type="time" name="hora" required>
                            <input class="form-group" type="hidden" id="cnpjtosa" name="cnpjtosa">
                            <br>
                            <label><b>Selecione seu pet </b></label>
                            <select class="form-group" name="nomePet" required>
                                <?php
                                if ($listarPet) :
                                    foreach ($listarPet as $pet) :
                                ?>
                                        <option value="<?= $pet->Codigo; ?>"><?= $pet->Nome; ?></option>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <option colspan="7">Nenhum pet cadastrado!!!</option>
                                <?php endif; ?>
                            </select>

                        </div>
                </div>
                <div class="modal-footer">
                    <button name="marcarTosa" type="submit">Marcar Tosa</button>
                </div>
                </form>
            </div>

        </div>
    </div>

    <div id="consulta" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <form action="agenda_u.php" method="post">
                        <div>
                            <label><b>Marcar consulta para o dia</b></label>
                            <input class="form-group" type="date" name="data" required>
                            <label><b>Marcar consulta para o horário</b></label>
                            <input class="form-group" type="time" name="hora" required>
                            <input class="form-group" type="hidden" id="cnpjconsulta" name="cnpjconsulta">
                            <br>
                            <label><b>Selecione seu pet </b></label>
                            <select class="form-group" name="nomePet" required>
                                <?php
                                if ($listarPet) :
                                    foreach ($listarPet as $pet) :
                                ?>
                                        <option value="<?= $pet->Codigo; ?>"><?= $pet->Nome; ?></option>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <option colspan="7">Nenhum pet cadastrado!!!</option>
                                <?php endif; ?>
                            </select>

                        </div>
                </div>
                <div class="modal-footer">
                    <button name="marcarConsulta" type="submit">Marcar Consulta</button>
                </div>
                </form>
            </div>

        </div>
    </div>


    <script>
        function tosa(cnpj) {
            document.getElementById('cnpjtosa').value = cnpj;
        }

        function consulta(cnpj) {
            document.getElementById('cnpjconsulta').value = cnpj;
        }
    </script>