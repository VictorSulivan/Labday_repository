<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "profil user!";


$head_metas = "<link rel=stylesheet href=assets/CSS/profil.css>";


ob_start();

?>


<div>
    <h1>Page de profil (photo de profil)</h1>


    <div class="Info_profil">
        <div class="content">
            <div>
                <h3>
                    Information de profil
                </h3>
            </div>
            <div> 
                <!--phto du profil
                    <img src="" alt="">-->
                    <p>ph</p>
            </div>
        </div>
    </div>

    <div class="second">
        <div class="div">
            <div class="content">
                <h4>
                    Informations principales
                </h4>
                <p>info secondairegfhvjbknbhgvycftdxrctvyubino,nubyuvtcrxewz</p>
            </div>
        </div>
        <div class="div">
            <div class="content">
                <h4>
                    Informations secondaires
                </h4>
                <p>info secondaire</p>
            </div>
        </div>
    </div>
</div>

<?php

$page_content = ob_get_clean();