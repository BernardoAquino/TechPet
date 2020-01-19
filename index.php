<?php
header("Content-type:text/html; charset=utf8");
require_once "Class/Class_usuario.php";
require_once "Class/Class_empresa.php";
require_once "Class/Class_produtos.php";



$Usuario = new Usuario();
$Empresa = new Empresa();
if (isset($_POST["verificar"])) {
    if ($Usuario->login() == false) {
        if ($Empresa->login() == false) {


?>
            <!DOCTYPE html>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Login ou senha incorretos...</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

    <?php

        }
    }
} else {
    ?>
    <!DOCTYPE html>
<?php
}
?>

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
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/Logoo.png" />
    <title>TechPet</title>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-person">

        <div class="container-fluid nav-text">
            <a class="navbar-brand text-person" href="index.php"><img class="logo-nav" src="img/LogoContorno.png"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon "><i class="fa fa-bars" style="font-size:36px;color:#00b7f1"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item ml-4">
                        <a class="nav-link text-person" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>

                    <li class="nav-item ml-4">
                        <a class="nav-link text-person" href="produtos.php"><i class="fa fa-fw fa-shopping-bag"></i> Produtos</a>
                    </li>

                </ul>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item ml-4">
                        <button class="btn nav-link text-person" style="margin-left: 3px;color: #00b7f1;" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-user-circle-o"></i> Login</button>
                    </li>

                </ul>
            </div>

        </div>

    </nav>




    <div class="content">
        <div id="demo" class="carousel slide" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carrousel-content-1">
                        <img src="img/carrossel-1.jpg">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carrousel-content-2">
                        <img src="img/carrossel-2.jpg">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carrousel-content-3">
                        <img src="img/carrossel-3.jpg">
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>


        <div class="container ">
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="conteudo-1">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="conteudo-2">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="conteudo-3">

                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="conteudo-1">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="conteudo-2">

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="conteudo-3">

                    </div>
                </div>
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

                    <button class="btn btn-success w3-section w3-padding" name="verificar" type="submit">Login</button>
                    <a href="Pages/cadastro/registro_u.php" class="btn btn-info w3-right w3-section w3-padding m-2">Registrar Usuário</a>
                    <a href="Pages/cadastro/registro_e.php" class="btn btn-info w3-right w3-section w3-padding m-2">Registrar Empresa</a>

                </div>
            </form>



        </div>
    </div>
    </div>

    <div class="container">

        <div class="cachorros">

            <div class="pet-title">
                <img style="width: 30px; height: 30px;" src="img/patamenor.png"><a>Cachorros</a>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="img/ração.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Rações</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src=" img/brinquedo.jpg">
                        <div class="card-body">
                            <h4 href="pro" class="card-title">Brinquedos</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="img/outros.png">
                        <div class="card-body">
                            <h4 href="pro" class="card-title">Outros</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gatos">

            <div class="pet-title">
                <img style="width: 30px; height: 30px;" src="img/patamenor.png"><a>Gatos</a>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="img/raçãogato.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Rações</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="img/brinquedogato.jpg">
                        <div class="card-body">
                            <h4 href="pro" class="card-title">Brinquedos</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="img/outros.jpg">
                        <div class="card-body">
                            <h4 href="pro" class="card-title">Outros</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="outrosanimais">

            <div class="pet-title">
                <img style="width: 30px; height: 30px;" src="img/patamenor.png"><a>Outros animais</a>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="img/aquario.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Aquários</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="img/gaiola-hamster.png">
                        <div class="card-body">
                            <h4 href="pro" class="card-title">Gaiolas</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="img/passarinhos.jpg">
                        <div class="card-body">
                            <h4 href="pro" class="card-title">Passarinhos</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="servicos">

                <div class="pet-title">
                    <img style="width: 30px; height: 30px;" src="img/patamenor.png"><a>Serviços</a>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card m-5">
                            <img class="card-img-top" src="img/tosa.jpg">
                            <div class="card-body">
                                <h4 class="card-title">Tosa</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-5">
                            <img class="card-img-top" src="img/banho.png">
                            <div class="card-body">
                                <h4 href="pro" class="card-title">Banho</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card m-5">
                            <img class="card-img-top" src="img/vacina.jpg">
                            <div class="card-body">
                                <h4 href="pro" class="card-title">Vacinas</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>





</body>


</html>

<?php
require_once "inc/footer_index.php";
?>