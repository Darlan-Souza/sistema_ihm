<?php
 include("header.php");
 include("nav.php");
 ?>
<main>

<div class="section no-pad-bot" id="index-banner">
    <br>
    <div class="container">
        <h1>TESTE CIDADAO</h1>
    </div>
    <?php echo($_SERVER['DOCUMENT_ROOT']."/sistema_ihm"); ?>
    <div class="col m6 s12 tooltipped" data-position="top" data-delay="100" data-tooltip="Gerenciar cadastros">
                <a href="#">
                    <div class="card-panel area-psicologo center">
                        <i class="fas fa-plus fa-5x" aria-hidden="true"></i>
                        <h5>Cadastros</h5>
                    </div>
                </a>
            </div>

            <div class="col m6 s12 tooltipped" data-position="top" data-delay="100" data-tooltip="Localizar animais perdidos">
                <a href="#">
                    <div class="card-panel area-psicologo center">
                        <i class="fas fa-map-marker-alt fa-5x" aria-hidden="true"></i>
                        <h5>Localizar animal</h5>
                    </div>
                </a>
            </div>

            <div class="col m6 s12 tooltipped" data-position="top" data-delay="100" data-tooltip="Identificar interesados em adoção">
                <a href="#">
                    <div class="card-panel area-psicologo center">
                        <i class="fas fa-eye fa-5x" aria-hidden="true"></i>
                        <h5>Ver interasados em adoção</h5>
                    </div>
                </a>
            </div>

            <div class="col m6 s12 tooltipped" data-position="top" data-delay="100" data-tooltip="Gestão de funcionários">
                <a href="#">
                    <div class="card-panel area-psicologo center">
                        <i class="fas fa-users fa-5x" aria-hidden="true"></i>
                        <h5>Gestão de funcionários</h5>
                    </div>
                </a>
            </div>
</div>
</main>
<?php
include("footer.php");
?>