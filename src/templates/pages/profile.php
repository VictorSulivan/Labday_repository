<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "profil user!";

$head_metas = "<link rel=stylesheet href=assets/CSS/profil.css>";

ob_start();

?>

<div class="All">

    <div class="Info">
        
        <div class="space">
            <div class="perso" id="border">
                <h3>Information de profil</h3>
                <p>Nom : </p>
                <p>Âge : </p>
                <p>Adresse : </p>
                <p>Numéro de téléphone : </p>
                <p>Numéro de sécurité sociale : </p>
            </div>
        </div>

        <div class="side">
            <div class="space">
                <div id="border">
                    <h4>Information secondaire</h4>
                </div>
            </div>

            <div class="space">
                <div id="border">
                    <!--phto du profil
                        <img src="" alt="">-->
                        <p>photo</p>
                </div>
            </div>

            <div class="space">
                <div id="border">
                    <h4>Informations secondaire</h4>
                    <p>info secondaire</p>
                </div>
            </div>

            <div class="space">
                <div id="border">
                    <h4>Informations secondaires</h4>
                    <p>info secondaire</p>
                </div>
            </div>
        </div>
    </div>

    <div class="space">
        <div class="news" id="border">
            <h4>Informations secondaires</h4>
            <p>Info covid</p>
        </div>
    </div>

</div>

<?php

$page_content = ob_get_clean();