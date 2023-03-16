<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "profile";

ob_start();

session_start();

// Vérification si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: connexion.php');
    exit();
}

// Récupération des informations de l'utilisateur depuis la base de données
$stmt = $db->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>

<h1>Page de profil de <p>prenom:<?php echo $userinfo['prenom'];?></h1>

<div>
    <h3>Information de profil</h3>
    <p>prenom:<?php echo $userinfo['prenom'];?>
    <p>nom:<?php echo $userinfo['nom'];?>
    <p>deuxiemes prenoms:<?php echo $userinfo['deuxieme_prenom'];?>
    <p>date de naissance:<?php echo $userinfo['date_de_naissance'];?>
    <p>adresse:<?php echo $userinfo['adresse_domicile'];?>
    <p>email:<?php echo $userinfo['email'];?>
    <p>numero de securité social:<?php echo $userinfo['id'];?>
</div>
<div>
    <p><a href="/actions/logout.php">Se déconnecter</a></p>
</div>


<?php

$page_content = ob_get_clean();