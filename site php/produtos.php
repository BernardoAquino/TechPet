<?php
header("Content-type:text/html; charset=utf8");

require_once "Class/Class_usuario.php";
require_once "Class/Class_empresa.php";
require_once "Class/Class_produtos.php";



$Produtos = new  Produtos();
$listar = $Produtos->listar();

$Usuario = new Usuario();
$Empresa = new Empresa();
  if(isset($_POST["verificar"])){
    if($Usuario->login() == false){
        if($Empresa->login() == false){

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
  }else{?>
      <!DOCTYPE html>
      <?php

  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="js/bootstrap.min.js"></script>
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
                        <a  class="nav-link text-person" href="produtos.php"><i class="fa fa-fw fa-shopping-bag"></i> Produtos</a>
                    </li>

                </ul>


                <ul class="navbar-nav ml-auto ">
                    
                        <li class="nav-item ml-4 ">
                        <form method="POST" action="pesquisa.php">
                            <a class="nav-link text-person" href="#"><i class="fa fa-fw fa-search"></i> <input type="text" name="pesquisar" placeholder="Procurar"></a>
                            </form>
                        </li> 

                        <li class="nav-item ml-4 ">
                            <button class="btn nav-link text-person" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-user-circle-o"></i> Login</button>
                        </li> 
                            
                                
                    
                    </ul>
                </div>
                    
            </div> 
        
        </nav>
        <div class="content">
            <div id="demo" class="carousel slide" data-ride="carousel"> </div>
            <div class="container mt-5">

                <div class="produtos-title">
                    <img style="width: 30px; height: 30px;" src="img/patamenor.png"><a>Produtos</a>
                    <hr>
                </div>

                <div class="row">
                                <?php if ($listar) :
                                    foreach ($listar as $produtos): ?>
                                                                <div class="col-md-4">
                                                                <div class="card m-3" >
                                                                <img class="card-img-top" src="Assets/Produtos/<?=$produtos->Imagem;?>">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title"><?php echo $produtos->Nome;?></h4>
                                                                        <p class="card-text"><?php echo $produtos->Descricao;?></p>
                                                                        <p class="card-text">R$ <?php echo $produtos->Valor;?></p>
                                                                        <button data-toggle="modal" data-target="#compra" class="btn btn-primary btn-block">Comprar</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                        <?php endforeach; ?>
                                                <?php else: 
                                                    echo "Nenhum produto cadastrado"?>
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
                <input class="w3-input w3-border" type="password"  name="password" minlength="6" maxlenght="20" required>

                <button class="btn btn-success w3-section w3-padding" name="verificar" type="submit">Login</button>
                <a href="Pages/cadastro/registro_u.php" class="btn btn-info w3-right w3-section w3-padding m-2">Registrar Usuário</a>
                <a href="Pages/cadastro/registro_e.php" class="btn btn-info w3-right w3-section w3-padding m-2">Registrar Empresa</a>
                
                </div>
            </form>

            

            </div>
        </div>
        </div>

<div id="compra" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <h4>Compra Efetuada!</h4>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>

    </body>
</html>