<?php

require_once '../../Inc/inc_usuario/header_u.php';
require_once '../../Inc/footer.php';

require_once "../../Class/Class_pet.php";
require_once "../../Class/Class_vacina.php";




$Pet = new Pet();





    if(isset($_POST["enviar"]))
    {
        $DestinationDirectory   = '../../Assets/Pets/'; //Qual pasta os arquivos deverão ir
            //Verifica se existe arquivo
        if($_FILES['file']['tmp_name'])
        {
            //Tipo da imagem
            $ImageType = $_FILES['file']['type'];
            //Nome do arquivo
            $ImageName = "pet_".date('dmy').time()."_".$_FILES['file']['name'];
            
            //Verificar tipo do arquivo
            $ImageType = ($ImageType == 'image/jpeg' ? 'jpg' : ($ImageType == 'image/gif' ? 'gif' : 'png'));
        }
        
        if (isset($_FILES['file']) && !empty($_FILES['file']['name'])) {
        
            if(move_uploaded_file($_FILES['file']['tmp_name'], $DestinationDirectory.$ImageName)){
                //Um Json com status ok, você poderá retornar qualquer coisa
                $ret = $ImageName;
                $_SESSION["nomeFile"] = $ImageName;
            }  
        }
        
        

        $Pet->cadastrar();
        echo "<script language=javascript>alert( 'Pet cadastrado com sucesso!' );</script>";
    }

    $listaPet = $Pet->listar();

    if(isset($_GET["codigo"])){
        $Pet->excluir($_GET["codigo"]);
    }

    

    
?>

<div class="content">
    <br>
    <div class="row">
            <div class="col-md-6">
                <div class="pet-design-2">
                    <ul class="list-group">
                    <?php
                        if($listaPet):
                            foreach($listaPet as $pet):
                    ?>
                        <li class="list-group-item">
                            <div class="pet">
                                <div class="w3-card-2 bg-pet">

                                    <div class="w3-container w3-center">
                                    <h3><?=$pet->Nome;?></h3>
                                    <img src="../../Assets/Pets/<?=$pet->Foto;?>" alt="Avatar" style="width: 100%;">
                                    <h5>Raça do Pet: <?=$pet->Raca;?></h5>
                                    <h5>Tipo do Animal: <?=$pet->Animal;?></h5>
                                    <h5>Sexo do Pet: <?=$pet->Sexo;?></h5>
                                    <p>Proprietário: <?=$_SESSION["nomeUsuario"];?></p>
                                    <?php
                                    ?>
                                        <a href="pet.php?codigo=<?=$pet->Codigo;?>" class="btn btn-danger m-1"><i class="fa fa-close"> Excluir</i></a>
                                        <form method="POST" action="vacinas.php">
                                            <input type="hidden" value="<?php echo $pet->Codigo;?>" name="petCodigo">
                                            <input class="btn btn-info m-1" type="submit" value="Vacinas">
                                            <a href="alterar_pet.php?codigoPet=<?=$pet->Codigo;?>" class="btn btn-info m-1">Alterar pet</a>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </li>
                        <?PHP endforeach; ?>
                        <?php else : ?>
                           <li style=" text-align:center;" colspan="7">Nenhum Pet cadastrado!!!</li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-6">
                <form action="pet.php" method="post" id="upload" enctype="multipart/form-data">

                    <div class="pet-title">
                        <img style="width: 30px; height: 30px;" src="../../img/patamenor.png"><a> Cadastre seu Pet</a>
                        <hr>
                    </div>

                    <div class="pet-design">
                        <div class="form-group">
                            <label for="select">Escolha seu pet</label>
                            <select class="form-control" name="tipoPet">
                                <option value="cachorro">Cachorro</option>
                                <option value="gato">Gato</option>
                                <option value="aquático">Aquático</option>
                                <option value="ave">Ave</option>
                                <option value="roedor">Roedor</option>
                                <option value="reptil">Réptil</option>
                                <option value="equino">Equino</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        <div class="form-group upload-imagem">
                            <label for="input">Escolha a foto de seu pet:</label><br>
                            <input type="file" name="file" id="img" accept="image/*" required/>

                        </div>
                        <div class="form-group">
                            <label for="input">Digite o nome do seu pet:</label><br>
                            <input class="form-control" type="text" name="nomePet">
                        </div>
                        <div class="form-group">
                            <label for="input">Digite a raça do seu pet:</label><br>
                            <input type="text" name="racaPet">
                        </div>
                        <div class="form-group">
                            <label for="input">Informe o sexo de seu pet:</label><br>
                            <select class="form-control" name="sexoPet">
                                <option value="M">Macho</option>
                                <option value="F">Fêmea</option>
                            </select>
                        </div>

                            <div class="form-group">
                                    <button class="btn btn-success btn-block" type="submit" name="enviar">Salvar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
   
                