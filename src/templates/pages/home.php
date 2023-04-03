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
<div class="blockn1">
    <div class="blockn2">
        <div class="blockn4">
            <div class="blockn6">
                <p>vos cartes</p>
            </div>
            <div class="blockn7">
                <p>Crer votre playlist</p>
            </div>
        </div>
        <div class="blockn5">
            <h3 class="title3home">Listes de documents</h3>
            <div class="blockn12">
            <div class="blockn8">
                <a href="/?page=admin_file">administratifs</a>
            </div>
            <div class="blockn9">
                <a href="/?page=soins_file">soins</a>
            </div>
            </div>

            </div>
            <div class="blockn13">
            <div class="blockn10">
            <a href="/?page=etudes_file">etudes</a>
            </div>
            </div>
            <div class="blockn11">
                <p>listes utilisateur</p>
            </div>
            </div>
        </div>
    </div>
    <div class="blockn3">
        <a href="/?page=info">info</a>
    </div>
    </div>
</div>

<?php
//echo '<p>'.var_dump($user).'</p>';



/*if (isset($_SESSION['user_id'])) {
    echo '<p>'.$_SESSION['user_id'].'</p>';
}*/

$page_content = ob_get_clean();