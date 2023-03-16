<?php

$page_title = "Inscription";

$head_metas = "<link rel=stylesheet href=assets/CSS/signup.css>";

ob_start();

?>

<div class="All"></div>

<div id="center">

    <?php
    include_once __DIR__ . '/../partials/alert_errors.php';
    include_once __DIR__ . '/../partials/alert_success.php';
    include_once __DIR__ . '/../../db.php';
    ?>

    <div class="login-box">
        <h2>Inscription</h2>
        <form method="POST">

            <div class="user-box">
                <input name="nom_user" type="text" placeholder="Votre nom de famille" id="nom_user" class="nom">
                <label>Nom</label>
            </div>



            <div class="user-box">
                <input name="prenom_user" type="text" placeholder="Votre prénom" id="prenom_user" class="prenom">
                <label>Prénom</label>
            </div>



            <div class="user-box">
                <input type="text" placeholder="Votre deuxième prénom" id="deuxieme_prenom_user" name="deuxieme_prenom_user" required="required" class="prenom2">
                <label>Deuxième prénom</label>
            </div>



            <div class="user-box">
                <input name="telephone_user" type="tel" placeholder="01 23 45 65 14" id="telephone_user" class="tel">
                <label>Numéro</label>
            </div>



            <div class="user-box">
                <input type="date" id="date_de_naissance_user" name="date_de_naissance_user" required="required" class="date">
                <label>Date de naissance</label>
            </div>



            <div class="user-box">
                <input type="text" id="adresse_domicile_user" name="adresse_domicile_user">
                <label for="adresse_domicile_user">Adresse</label>
            </div>



            <div class="user-box">
                <input name="inscription_email_user" type="email" placeholder="Votre@email.com" id="email_user" class="email">
                <label>Email</label>
            </div>



            <div class="user-box">
                <input name="inscription_password" type="password" placeholder="Mot de passe" id="password" class="password">
                <label>Mot de passe</label>
            </div>



            <div class="user-box">
                <input name="inscription_cpassword" type="password" placeholder="Confirmez le mot de passe" id="Cpassword" class="cpassword">
                <label>Confirmez le mot de passe</label>
            </div>



            <input type="submit" name="forminscription" value="inscription" />
        </form>
        <?php
        if (isset($_POST['forminscription'])) {
            if (!empty($_POST['nom_user']) and !empty($_POST['prenom_user']) and !empty($_POST['date_de_naissance_user']) and !empty($_POST['adresse_domicile_user']) and !empty($_POST['password']) and !empty($_POST['Cpassword'])) {
                $nom = htmlspecialchars($_POST['nom_user']);
                $prenom = htmlspecialchars($_POST['prenom_user']);
                $deuxiemeprenom = htmlspecialchars($_POST['deuxieme_prenom_user']);
                $date_de_naissance_user = htmlspecialchars($_POST['date_de_naissance_user']);
                $adresse_domicile_user = htmlspecialchars($_POST['adresse_domicile_user']);
                $role = 0;
                $password = sha1($_POST['password']);
                $Cpassword = sha1($_POST['Cpassword']);
                $mail = htmlspecialchars($_POST['email_user']);
                $nomlength = strlen($nom);
                $prenomlength = strlen($prenom);
                $servername = "localhost";
                $username = "root";
                $dbpassword = "root";
                $dbname = "projet_labday";
                $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
                if (!$conn) {
                    die("La connexion a échoué: " . mysqli_connect_error());
                }
                if ($nomlength <= 255) {
                    if ($prenomlength <= 255) {

                        if ($password == $Cpassword) {
                            if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                                // Préparer la requête SQL
                                $insertmbr = "INSERT INTO users (nom, prenom, deuxieme_prenom, role, adresse_domicile, date_de_naissance, email, password) VALUES ('$nom', '$prenom', '$deuxiemeprenom','$role', '$adresse_domicile_user', '$date_de_naissance_user', '$mail', '$password')";

                                if (mysqli_query($conn, $insertmbr)) {
                                    echo "Inscription réussie !";
                                    $_SESSION['compte_creer'] = "Votre pseudo";
                                    // Redirige l'utilisateur vers la page de connexion
                                    header('Location: /?page=login');
                                    exit; // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire

                                } else {
                                    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
                                }
                            } else {
                                $erreur = "c'est pas une adresse mail valide ca!";
                            }
                        } else {
                            $erreur = "le mot de passe et la verification de mot de passe doivent etre identiques";
                        }
                    } else {
                        $erreur = "erreur prenom trop long moins de 255 caractere please";
                    }
                } else {
                    $erreur = "erreur nom trop long moins de 255 caractere please";
                }
            } else {
                $erreur = "tout les champs doivent etre complétés";
            }
        }

        if (isset($erreur)) {
            echo $erreur;
        }
?>
        </div>
    </div>
</div>

<?php

$page_content = ob_get_clean();
