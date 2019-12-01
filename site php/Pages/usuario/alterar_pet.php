<?php

require_once '../../Inc/inc_usuario/header_u.php';
require_once '../../Inc/footer.php';

require_once "../../Class/Class_pet.php";

$Pet = new Pet();

if(isset($_GET["codigoPet"])) {
    $dadosPet = $Pet->listarCodigo($_GET["codigoPet"]);
}

if(isset($_POST["alterar"])){
    if(isset($_POST["nome_Pet"])){

    }
    
        $Pet->alterar();
}
?>


    <form action="alterar_pet.php?codigoPet=<?=$dadosPet->Codigo;?>" method="post"  id="upload" enctype="multipart/form-data">

        <div class="container">

            <br>

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <div class="produtos-title">
                        <img style="width: 50px; height: 50px;" src="../../img/patamenor.png"><a> Alterar Pet</a>
                        <hr>
                    </div>

                    <div class="alt-pet-design">
                        <div class="form-group">
                            <label for="select">Escolha seu pet</label>
                            <select class="form-control" name="tipo_Pet">
                                <option value="cachorro" <?php if($dadosPet->Animal == "cachorro"){ echo "selected";}?>>Cachorro</option>
                                <option value="gato" <?php if($dadosPet->Animal == "gato"){ echo "selected";}?>>Gato</option>
                                <option value="aquático" <?php if($dadosPet->Animal == "aquático"){ echo "selected";}?>>Aquático</option>
                                <option value="ave" <?php if($dadosPet->Animal == "ave"){ echo "selected";}?>>Ave</option>
                                <option value="roedor" <?php if($dadosPet->Animal == "roedor"){ echo "selected";}?>>Roedor</option>
                                <option value="reptil" <?php if($dadosPet->Animal == "reptil"){ echo "selected";}?>>Réptil</option>
                                <option value="equino" <?php if($dadosPet->Animal == "equino"){ echo "selected";}?>>Equino</option>
                                <option value="outro" <?php if($dadosPet->Animal == "outro"){ echo "selected";}?>>Outro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="input">Digite o nome do seu pet:</label><br>
                            <input class="form-control" type="text" name="nome_Pet" value="<?=$dadosPet->Nome; ?>">
                        </div>

                        


                        <div class="form-group">
                            <label for="input">Digite a raça do seu pet:</label><br>
                            <input class="form-control"  type="text" name="raca_Pet" value="<?=$dadosPet->Raca; ?>">
                        </div>
                        <div class="form-group">
                            <label for="input">Informe o sexo de seu pet:</label><br>
                            <select class="form-control" name="sexo_Pet">
                                <option value="M" <?php if($dadosPet->Animal == "M"){ echo "selected";}?>>Macho</option>
                                <option value="F" <?php if($dadosPet->Animal == "F"){ echo "selected";}?>>Fêmea</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button  class="btn btn-info btn-block" name="alterar" type="submit">Salvar alterações</button>
                        </div>
                        <div class="col-md-6">
                            <a href="pet.php" class="btn btn-info btn-block" >Voltar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </form>

