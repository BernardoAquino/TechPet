<?php

require_once '../../Inc/footer.php';



require_once '../../Class/Class_empresa.php';
require_once '../../Class/Class_pet.php';
require_once '../../Class/Class_servicos.php';

$Empresa = new Empresa();
$listarEmpresa = $Empresa->listarTodos();


$Pet = new Pet();
$listarPet = $Pet->listar();

$Servicos = new Servicos();

if (isset($_POST["marcarTosa"])) {
    if (isset($_POST["nomePet"]) && isset($_POST["cnpjtosa"]) && isset($_POST["hora"])) {
        $_SESSION["Tipo"] = "Tosa";
        $Servicos->inserirtosa();
        echo "<script language=javascript>alert( 'Tosa marcada!' );</script>";
    }
} else if (isset($_POST["marcarConsulta"])) {
    if (isset($_POST["nomePet"]) && isset($_POST["cnpjconsulta"]) && isset($_POST["hora"])) {
        $_SESSION["Tipo"] = "Consulta";
        $Servicos->inserirconsulta();
        echo "<script language=javascript>alert( 'Consulta marcada!' );</script>";
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


    <div id="tosa2" class="modal fade">
        <div class="modal">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <h4>Requerimento da <?= $_SESSION["Tipo"]; ?> feita com sucesso</h4>
                    <button type="submit">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container mt-5">

            <div class="produtos-title">
                <img style="width: 30px; height: 30px;" src="../../img/patamenor.png"><a>Serviços</a>
                <hr>
            </div>

            <div class="row">
                <?php
                if ($listarEmpresa) :
                    foreach ($listarEmpresa as $empresa) :
                ?>
                        <div class="col-md-6">
                            <li class="list-group-item mt-3">

                                <div class="serv-design">
                                    <div class="card">

                                        <header class="w3-container w3-light-grey">
                                            <h3><?= $empresa->Nome; ?></h3>
                                        </header>

                                        <div class="container">
                                            <p></p>
                                            <hr>
                                            <img src="../../Assets/Empresa/<?= $empresa->Foto; ?>" alt="Avatar" style="widht: 100%; height: 100px;" class="w3-left mr-3">
                                            <p>Endereco: <?= $empresa->Endereco ?></p><br>
                                            <p>Telefone: <?= $empresa->Telefone ?></p>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <a class="btn btn-info btn-block text-white mb-3" data-toggle="modal" data-target="#tosa" onclick="tosa('<?= $empresa->CNPJ; ?>')">Marcar Tosa/Banho</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a class="btn btn-info btn-block text-white mb-3" data-toggle="modal" data-target="#consulta" onclick="consulta('<?= $empresa->CNPJ; ?>')">Marcar Consulta</a>
                                                </div>


                                            </div>

                                        </div>


                                    </div>
                                </div>

                            </li>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li colspan="7">Nenhuma Empresa cadastrada!!!</li>
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
                    <form action="servicos_u.php" method="post">
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
                    <button class="btn btn-info" name="marcarTosa" type="submit">Marcar Tosa e Banho</button>
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
                    <form action="servicos_u.php" method="post">
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
                    <button class="btn btn-info " name="marcarConsulta" type="submit">Marcar Consulta</button>
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