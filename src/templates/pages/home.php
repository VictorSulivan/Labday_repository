<?php

require_once __DIR__ . '/../../init.php';

$page_title = "Accueil";
$head_metas = "<link rel=stylesheet href=assets/CSS/home.css>";


ob_start();

?>

<header>
    <h1>Welcome To Numérie</h1> <br>
    <a href="/?page=soins_file">Creé rend des vous médical</a>
    <a href="/?page=admin_file">Grérer je sais pas quoi</a>
    <a href="">Pas d'idée !</a>
</header>

<?php

if ($user !== false) {
    if ($user->role == 0) { ?>

        <h2>Votre compte a été banni</h2>

<?php }
} ?>



<?php
//echo '<p>'.var_dump($user).'</p>';



/*if (isset($_SESSION['user_id'])) {
    echo '<p>'.$_SESSION['user_id'].'</p>';
}*/

$page_content = ob_get_clean();
