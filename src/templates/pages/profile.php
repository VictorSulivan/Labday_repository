<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "profile";


$head_metas = "<link rel=stylesheet href=assets/CSS/profil.css>";


ob_start();

//session_start();

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

<h1>Page de profil de<?php echo $_SESSION['user_prenom'];?></h1>

<div>
    <h3>Information de profil</h3>
    <p>prenom:<?php echo $_SESSION['user_prenom'];?>
    <p>nom:<?php echo $_SESSION['user_nom'];?>
    <p>deuxiemes prenoms:<?php echo $_SESSION['user_deuxieme_prenom'];?>
    <p>date de naissance:<?php echo $_SESSION['user_date_de_naissance'];?>
    <p>adresse:<?php echo $_SESSION['user_adresse_domicile'];?>
    <p>email:<?php echo $_SESSION['user_email'];?>
    <p>numero de securité social:<?php echo $_SESSION['user_id'];?>
</div>


<?php

$page_content = ob_get_clean();