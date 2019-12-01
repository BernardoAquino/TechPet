<?php
header("Content-type:text/html; charset=utf8");
require_once "../../Class/Class_usuario.php";
$Usuarios = new Usuario();
if(isset($_POST["enviar"])){
    $VERIFICA = $Usuarios->verificaLogin();
    if($VERIFICA == false){
        $Usuarios->cadastrar();
        header("location: ../usuario/index_u.php");
    } else if($VERIFICA == true){
        ?>
        <script>
            alert('E-mail já cadastrado!')
        </script>
        <?php
    }
}



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
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../../img/Logoo.png" />
    <title>TechPet</title>
</head>
<body>

<nav class="navbar navbar-expand-md bg-person">

    <div class="container-fluid nav-text">
        <a class="navbar-brand text-person" href="../../index.php"><img class="logo-nav" src="../../img/LogoContorno.png"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon "><i class="fa fa-bars" style="font-size:36px;color:#00b7f1"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">

            <ul class="navbar-nav mr-auto">

                <li class="nav-item ml-4">
                    <a class="nav-link text-person" href="../../index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>


            </ul>

        </div>

    </div>

</nav>
<div class="reg-design">
    <form action="registro_u.php" method="post">
        <div class="container">

            <div class="reg-title">
                <img style="width: 50px; height: 50px;" src="../../img/patamenor.png"><a> Cadastro do Usuário</a>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="input">Digite seu nome</label>
                        <input class="form-control" type="text" name="name" id="name" required>
                    </div>

                    <div class="form-group">
                        <label for="input">Digite seu email</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="input">Digite sua senha</label>
                        <input class="form-control" type="password" name="password" id="password" minlength="6" maxlenght="20" required>
                    </div>

                </div>
                <div class="col-md-3"></div>
            </div>


            <div class="row">

                <div class="col-md-3"></div>
                <div class="col-md-2">
                    <button class="btn btn-success btn-block" name="enviar" type="submit">Salvar</button>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger btn-block type="reset">Apagar</button>
                </div>

                <div class="col-md-2" >
                    <a class="btn btn-info btn-block" href="../../">Voltar</a>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </form>
</div>

</body>
</html>
