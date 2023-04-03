<?php

require_once __DIR__ . '/../../init.php';

$page_title = "profile";
$head_metas = "<link rel=stylesheet href=assets/CSS/profil.css>";
$page_scripts = "<script href=assets/JS/profil.js>";

ob_start();

//session_start();

// Vérification si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: /?page=login');
    exit();
}

// Récupération des informations de l'utilisateur depuis la base de données
$stmt = $db->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch();
?>


<h1 class="title">Page de profil de <?php echo $_SESSION['user_prenom']; ?></h1>

<form action="" method="post">
    <div class="allform">
        <div class="container-profile">

            <div class="grid-profil">

                <div class="form-group a">
                    <label>nom : <?php echo $_SESSION['user_nom']; ?> </label>
                    <input type="text" name="user_nom" value="<?php echo $_SESSION['user_nom']; ?>">
                </div>

                <div class="form-group b">
                    <label>prenom : <?php echo $_SESSION['user_prenom']; ?></label>
                    <input type="text" name="user_prenom" value="<?php echo $_SESSION['user_prenom']; ?>">
                </div>

                <div class="form-group c">
                    <label>deuxiemes prenoms : <?php echo $_SESSION['user_deuxieme_prenom']; ?></label>
                    <input type="text" name="deuxiemeprenom" value="<?php echo $_SESSION['user_deuxieme_prenom']; ?>">
                </div>

                <div class="form-group">
                    <label>date de naissance : <?php echo $_SESSION['user_date_de_naissance']; ?></label>
                    <input type="date" name="user_date_de_naissance" value="<?php echo $_SESSION['user_date_de_naissance']; ?>">
                </div>

                <div class="form-group">
                    <label>adresse : <?php echo $_SESSION['user_adresse_domicile']; ?></label>
                    <input type="text" name="user_adresse_domicile" value="<?php echo $_SESSION['user_adresse_domicile']; ?>">
                </div>

                <div class="form-group email-group">
                    <label>email : <?php echo $_SESSION['user_email']; ?></label>
                </div>

                <div class="form-group">
                    <label>numero de securité social : <?php echo $_SESSION['user_id']; ?></label>
                </div>

                <!--<div class="button-container-profile">
                <button type="submit" class="button-profile" name="modifications">Changer les modifications</button>
            </div>-->

                <div class="button-container-profile">
                    <button type="submit" class="button-profile" name="modifications">Enregister les modifications</button>
                </div>
            </div>
        </div>
</form>


<?php

if (isset($_POST['modifications'])) {

    $nom = ($_POST['user_nom']);
    $prenom = ($_POST['user_prenom']);
    $deuxiemeprenom = ($_POST['deuxiemeprenom']);
    $date_de_naissance_user = ($_POST['user_date_de_naissance']);
    $adresse_domicile_user = ($_POST['user_adresse_domicile']);


    if (
        empty($nom) ||
        empty($prenom) ||
        empty($deuxiemeprenom) ||
        empty($date_de_naissance_user) ||
        empty($adresse_domicile_user)
    ) {


        $message = "Veuillez fuhorufgheoyug";
    } else {
        $update = $db->prepare('UPDATE users SET nom = ?, prenom = ?, deuxieme_prenom = ?, date_de_naissance = ?, adresse_domicile = ? WHERE id = ?');
        $update->execute([$nom, $prenom, $deuxiemeprenom, $date_de_naissance_user, $adresse_domicile_user, $_SESSION['user_id']]);
        $_SESSION['user_prenom'] = $prenom;
        $_SESSION['user_nom'] = $nom;
        $_SESSION['user_deuxieme_prenom'] = $deuxiemeprenom;
        $_SESSION['user_adresse_domicile'] = $adresse_domicile_user;
        $_SESSION['user_date_de_naissance'] = $date_de_naissance_user;
    }
}

?>


<?php

if (isset($message)) {
    echo $message;
}

?>



<?php

$page_content = ob_get_clean();

?>