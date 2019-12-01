<?php
header("Content-type:text/html; charset=utf8");
require_once "../../Class/Class_empresa.php";
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
<?php
if(isset($_SESSION["nomeEmpresa"])) {
    ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Bem Vindo
            <?= $_SESSION["nomeEmpresa"]; ?>
            !
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}else{
    header("location: ../../");
}

?>
<nav class="navbar navbar-expand-md bg-person">

  <div class="container-fluid nav-text">
      <a class="navbar-brand text-person" href="index_e.php"><img class="logo-nav" src="../../img/LogoContorno.png"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon "><i class="fa fa-bars" style="font-size:36px;color:#00b7f1"></i></span>
      </button>

      <div class="collapse navbar-collapse" id="collapsibleNavbar">

          <ul class="navbar-nav mr-auto">

              <li class="nav-item ml-4">
                  <a class="nav-link text-person" href="../../Pages/empresa/index_e.php"><i class="fa fa-fw fa-home"></i> Home</a>
              </li>




              <li class="nav-item ml-4">
                  <a  class="nav-link text-person" href="../../Pages/empresa/downloadapp.php"><i class="fa fa-fw fa-download"></i> Download App Empresas</a>
              </li>
                
            </ul>

            <ul class="navbar-nav ml-auto">
               
                    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-person" href="#" id="navbardrop" data-toggle="dropdown">
                        <?php
                        if(isset($_SESSION["nomeEmpresa"])) {
                            echo $_SESSION["nomeEmpresa"];
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
