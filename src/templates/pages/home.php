<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "Accueil";

ob_start();

?>

<h1>Page d'accueil</h1>

<?php

if ($user !== false) {
    if ($user->role == 0) { ?>

    <h2>Votre compte a été banni</h2>
   
<?php }
}?>
<div>
    <div>
        <div>
            <div>
                <p>vos cartes</p>
            </div>
            <div>
                <p>Crer votre playlist</p>
            </div>
        </div>
        <div>
            <div>
                <p>administrations</p>
            </div>
            <div>
            <p>soins</p>
            </div>
            <div>
            <p>etudes</p>
            </div>
            <div>
            <p>listes utilisateur</p>
            </div>
        </div>
    </div>
    <div>
        <p>infos</p>
    </div>
</div>

<?php
//echo '<p>'.var_dump($user).'</p>';



/*if (isset($_SESSION['user_id'])) {
    echo '<p>'.$_SESSION['user_id'].'</p>';
}*/

$page_content = ob_get_clean();