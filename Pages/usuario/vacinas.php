<?php
header("Content-type:text/html; charset=utf8");
require_once '../../Inc/footer.php';
require_once '../../Inc/inc_usuario/header_u.php';
require_once "../../Class/Class_vacina.php";
require_once "../../Class/Class_produtos.php";
$Vacina = new  Vacina();
$listar = $Vacina->listar(($_POST["petCodigo"]));




?>


<div class="content">
    <div id="demo" class="carousel slide" data-ride="carousel"> </div>
    <div class="container mt-5">

        <div class="produtos-title">
            <img style="width: 30px; height: 30px;" src="../../img/patamenor.png"><a>Vacinas</a>
            <hr>
        </div>

        <div class="row">

                        <?php if ($listar) :
                            foreach ($listar as $vacinas): ?>
                                                        <div class="col-md-6">
                                                            <div class="card">
                                                                <div class="vac-design m-4">
                                                                    <h4><?php echo $vacinas->Nome;?></h4>
                                                                    <hr>
                                                                    <a>Data de Aplicação da Vacina: <?=$dataVacina = date("d/m/Y", strtotime($vacinas->DTA_Aplicacao));?></a><br>
                                                                    <a>Data de Vencimento da Vacina: <?=$dataVacinas = date("d/m/Y", strtotime($vacinas->DTA_Vencimento));?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                <?php endforeach; ?>
                                        <?php else: 
                                            echo "Nenhuma vacina cadastrada"?>
                                        <?php endif; ?>


            <div class="col-md-4"></div>
            <div class="col-md-4">
                <br>
                <a href="pet.php" class="btn btn-info btn-block text-white">Voltar</a>
            </div>
            <div class="col-md-4"></div>
                        
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