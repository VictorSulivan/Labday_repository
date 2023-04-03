<?php

$page_title = "Connexion";

$head_metas = "<link rel=stylesheet href=assets/CSS/login.css>";

ob_start();

?>

<div class=All>

    <div class="login-box">
        <h2>Connection</h2>
        <form method="POST">
            <div class="user-box">
                <input type="email" id="mailconnect" name="mailconnect" required>
                <label>Email</label>
            </div>

            <div class="user-box">
                <input type="password" id="passwordconnect" name="passwordconnect" required>
                <label>Mot de passe</label>
            </div>
            <input type="submit" name="loginsubmitbutton" id="loginsubmitbutton" value="Se connecter!" />
        </form>
        <?php
        if (isset($_POST['loginsubmitbutton'])) {
            $mailconnect = htmlspecialchars($_POST['mailconnect']);
            $passwordconnect = sha1($_POST['passwordconnect']);
            if (!empty($_POST['mailconnect']) and !empty($_POST['passwordconnect'])) {

                // Préparer la requête SQL
                $verifuser = $db->prepare('SELECT * FROM users WHERE email = ? ');
                $verifuser->execute(array($mailconnect));
                $userinfo = $verifuser->fetch();

                if ($passwordconnect == $userinfo['password']) {
                    $_SESSION['user_id'] = $userinfo['id'];
                    $_SESSION['user_email'] = $userinfo['email'];
                    $_SESSION['user_password'] = $userinfo['password'];
                    $_SESSION['user_prenom'] = $userinfo['prenom'];
                    $_SESSION['user_nom'] = $userinfo['nom'];
                    $_SESSION['user_deuxieme_prenom'] = $userinfo['deuxieme_prenom'];
                    $_SESSION['user_role'] = $userinfo['role'];
                    $_SESSION['user_adresse_domicile'] = $userinfo['adresse_domicile'];
                    $_SESSION['user_date_de_naissance'] = $userinfo['date_de_naissance'];
                    header("Location: ?page=profile&id=" . $_SESSION['user_id']);
                    exit();
                } else {

                    $erreur = 'Adresse email ou mot de passe incorrect.';
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

<?php

$page_content = ob_get_clean();
