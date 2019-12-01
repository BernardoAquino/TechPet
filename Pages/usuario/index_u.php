<?php
require_once '../../Inc/inc_usuario/header_ui.php';
require_once '../../Inc/footer.php';

?>


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
                    <img src="../../img/carrossel-1.jpg">
                </div>
            </div>
            <div class="carousel-item">
                <div class="carrousel-content-2">
                    <img src="../../img/carrossel-2.jpg">
                </div>
            </div>
            <div class="carousel-item">
                <div class="carrousel-content-3">
                    <img src="../../img/carrossel-3.jpg">
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

    <br><br>

    <div class="container">

        <div class="cachorros">

            <div class="pet-title">
                <img style="width: 30px; height: 30px;" src="../../img/patamenor.png"><a>Cachorros</a>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="../../img/ração.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Rações</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="../../img/brinquedo.jpg">
                        <div class="card-body">
                            <h4 href="pro" class="card-title">Brinquedos</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="../../img/outros.png">
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
                <img style="width: 30px; height: 30px;" src="../../img/patamenor.png"><a>Gatos</a>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="../../img/raçãogato.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Rações</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="../../img/brinquedogato.jpg">
                        <div class="card-body">
                            <h4 href="pro" class="card-title">Brinquedos</h4>
                            <a href="produtos.php" class="card-text">Ir a produtos...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="../../img/outros.jpg">
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
            <img style="width: 30px; height: 30px;" src="../../img/patamenor.png"><a>Outros animais</a>
            <hr>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card m-5">
                    <img class="card-img-top" src="../../img/aquario.jpg">
                    <div class="card-body">
                        <h4 class="card-title">Aquários</h4>
                        <a href="produtos.php" class="card-text">Ir a produtos...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-5">
                    <img class="card-img-top" src="../../img/gaiola-hamster.png">
                    <div class="card-body">
                        <h4 href="pro" class="card-title">Gaiolas</h4>
                        <a href="produtos.php" class="card-text">Ir a produtos...</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card m-5">
                    <img class="card-img-top" src="../../img/passarinhos.jpg">
                    <div class="card-body">
                        <h4 href="pro" class="card-title">Passarinhos</h4>
                        <a href="produtos.php" class="card-text">Ir a produtos...</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="servicos">

            <div class="pet-title">
                <img style="width: 30px; height: 30px;" src="../../img/patamenor.png"><a>Serviços</a>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="../../img/tosa.jpg">
                        <div class="card-body">
                            <h4 class="card-title">Tosa</h4>
                            <a href="servicos_u.php" class="card-text">Ir a serviços...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="../../img/banho.png">
                        <div class="card-body">
                            <h4 href="pro" class="card-title">Banho</h4>
                            <a href="servicos_u.php" class="card-text">Ir a serviços...</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card m-5">
                        <img class="card-img-top" src="../../img/vacina.jpg">
                        <div class="card-body">
                            <h4 href="pro" class="card-title">Vacinas</h4>
                            <a href="servicos_u.php" class="card-text">Ir a serviços...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>


<?php
require_once "../../inc/footer_usuario.php";
?>

