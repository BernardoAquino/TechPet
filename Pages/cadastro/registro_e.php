<?php
header("Content-type:text/html; charset=utf8");
require_once "../../Class/Class_empresa.php";

$Empresa = new Empresa();
if (isset($_POST["enviar"])) {
    $VERIFICA = $Empresa->verificaLogin();
    if ($VERIFICA == false) {
        $DestinationDirectory    = '../../Assets/Empresa/'; //Qual pasta os arquivos deverão ir
        //Verifica se existe arquivo
        if ($_FILES['file']['tmp_name']) {
            //Tipo da imagem
            $ImageType = $_FILES['file']['type'];
            //Nome do arquivo
            $ImageName = "empresa_" . date('dmy') . time() . "_" . $_FILES['file']['name'];

            //Verificar tipo do arquivo
            $ImageType = ($ImageType == 'image/jpeg' ? 'jpg' : ($ImageType == 'image/gif' ? 'gif' : 'png'));
        }

        if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {

            if (move_uploaded_file($_FILES['file']['tmp_name'], $DestinationDirectory . $ImageName)) {
                //Um Json com status ok, você poderá retornar qualquer coisa
                $ret = $ImageName;
                $_SESSION["nomeFileEmpresa"] = $ImageName;
            }
        }
        $Empresa->cadastrar();
    } else if ($VERIFICA == true) {
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

        <form action="registro_e.php" method="post" enctype="multipart/form-data">

            <div class="container">

                <div class="reg-title">
                    <img style="width: 50px; height: 50px;" src="../../img/patamenor.png"><a> Cadastro da Empresa</a>
                    <hr>
                </div>



                <div class="row">

                    <div class="col-md-2"></div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="input">Informe o CNPJ do petshop:</label>
                            <input class="form-control" type="text" name="cnpj" minlength="6" maxlenght="19" required>
                        </div>

                        <div class="form-group">
                            <label for="input">Digite o nome do petshop:</label>
                            <input class="form-control" type="text" name="name" id="name" required>
                        </div>

                        <div class="form-group">
                            <label for="input">Digite o email do petshop:</label>
                            <input class="form-control" type="email" name="email" id="email" required>
                        </div>

                        <div class="form-group">
                            <label for="input">Digite a senha do petshop:</label>
                            <input class="form-control" type="password" name="password" id="password" minlength="6" maxlenght="20" required>
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="input">Informe o CEP do petshop:</label>
                            <input class="form-control" type="text" name="cep" required minlength="1" maxlenght="10">
                        </div>

                        <div class="form-group">
                            <label for="input">Informe o endereço do petshop:</label>
                            <input class="form-control" type="text" name="endereco" required>
                        </div>

                        <div class="form-group">
                            <label for="input">Selecione a imagem da empresa:</label>
                            <input class="form-control" type="file" name="file" id="file" accept="image/*" required />
                        </div>

                        <div class="form-group">
                            <label for="input">Informe o telefone do petshop:</label>
                            <input class="form-control" type="number" name="telefone" required><br>
                        </div>

                    </div>
                    <div class="col-md-2"></div>

                    <br>

                    <div class="col-md-3"></div>
                    <div class="col-md-2">
                        <button class="btn btn-success btn-block" name="enviar" type="submit">Salvar</button>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-danger btn-block" type="reset">Apagar</button>
                    </div>

                    <div class="col-md-2 ">
                        <a class="btn btn-info btn-block" href="../../">Voltar</a>
                    </div>
                    <div class="col-md-3"></div>

                </div>
                <br><br>
        </form>
    </div>

</body>

</html>