<?php

$page_title = "Inscription";

$head_metas = "<link rel=stylesheet href=assets/CSS/signup.css>";

ob_start();

?>

<?php
include_once __DIR__ . '/../partials/alert_errors.php';
include_once __DIR__ . '/../partials/alert_success.php';
?>

<form method="post">
    <div class="login-form">
        <h3>Inscription</h3>
        <form>
            <div class="user-box">
                <input name="nom_user" type="text" placeholder="Votre nom de famille" id="nom_user" required="required" class="nom">
                <label>Nom</label>
            </div>

            <div class="user-box">
                <input name="prenom_user" type="text" placeholder="Votre prénom" id="prenom_user" required="required" class="prenom">
                <label>Prénom</label>
            </div>

            <!--         <div class="user-box">
            <input type="password" placeholder="Votre deuxième prénom" id="deuxieme_prenom_user" name="deuxieme_prenom_user" required="required" class="prenom2">
            <label>Deuxième prénom</label>
        </div>

        <div class="user-box">
            <input type="date" id="date_de_naissance_user" name="date_de_naissance_user" required="required" class="date">
            <label>Date de naissance</label>
        </div> -->



        <div class="user-box">
            <input name="telephone_user" type="tel" placeholder="01 01 01 01 01" id="telephone_user" required="required" class="tel">
            <label>Numéro</label>
        </div>

            <div class="user-box">
                <input name="inscription_email_user" type="text" placeholder="Votre@email.com" id="email_user" required="required" class="email">
                <label>Email</label>
            </div>

            <div class="user-box">
                <input name="inscription_password" type="text" placeholder="Mot de passe" id="password" required="required" class="password">
                <label>Mot de passe</label>
            </div>

            <div class="user-box">
                <input name="inscription_cpassword" type="text" placeholder="Confirmez le mot de passe" id="Cpassword" required="required" class="cpassword">
                <label>Confirmez le mot de passe</label>
            </div>

            <button type="submit" value="submit" name="submit" id="submit">Inscription</button>
        </form>
    </div>
    </div>

    <?php

    $page_content = ob_get_clean();
