<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "profil user!";

ob_start();

?>

<h1>Page d'accueil</h1>

<div>
    <div>
        <div>
            <h3>
                Information de profil
            </h3>
        </div>
        <div>
            <!--phto du profil
                <img src="" alt="">-->
                <p>photo</p>
        </div>
    </div>
    <div>
        <div>
            <h4>
                Informations principales
            </h4>
            <p>info secondaire</p>
        </div>
        <div>
            <h4>
                Informations secondaires
            </h4>
            <p>info secondaire</p>
        </div>
    </div>
</div>

<?php

$page_content = ob_get_clean();