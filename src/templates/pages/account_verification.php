<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "Vérification";

ob_start();

?>

<h1>Vérifier un compte</h1>

<?php

include_once __DIR__ . '/../partials/alert_errors.php';
include_once __DIR__ . '/../partials/alert_success.php';

if ($user->role < 200) {
    header('Location: /?page=home');
}

$stmh = $db->prepare('SELECT * FROM users WHERE role<=10');
$stmh->execute();
$utilisateur = $stmh->fetchAll();

foreach ($utilisateur as $usr) {
    $user_role = array_search($usr['role'], $config);
    echo '<p>';
    echo 'Utilisateur : ' . $usr['email'] . ';    Role : ' . $config['roles'][$usr['role']];
    echo '</p>';


}
?>

<form action="/actions/user_role.php" method="post">
    <select name="select" id="select">
        <option value="">Sélectionner un utilisateur</option>
        <?php
        foreach ($utilisateur as $usr) { ?>
            
            <option value="<?=$usr['id']?>"><?=$usr['email']?></option>
        
       <?php }
        ?>
    </select>

    <button name="verify" class="verify">Vérifier</button>
    <button name="ban" class="ban">Bannir</button>

</form>

<?php
$page_content = ob_get_clean();
