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
        ?>

        <div class="login-box">
            <h2>Inscription</h2>
            <form>
                <div class="form_input">
                    <input type="text" id="nom_user" name="nom_user" required>
                    <label>Nom</label>
                </div>
                <div class="form_input">
                    <input type="text" id="prenom_user" name="prenom_user" required>
                    <label>Prénom</label>
                </div>
                <div class="form_input">
                    <input type="text" id="deuxieme_prenom_user" name="deuxieme_prenom_user">
                    <label>Deuxième prénom</label>
                </div>
                <div class="form_input">
                    <input type="datetime-local" id="date_de_naissance_user" name="date_de_naissance_user" required>
                    <label>Date de naissance</label>
                </div>
                <div class="form_input">
                    <input type="text" id="adresse_domicile_user" name="adresse_domicile_user" requiered>
                    <label>Adresse</label>
                </div>
                <div class="form_input">
                    <input type="tel" id="telephone_user" name="telephone_user">
                    <label>Numéro de télephone</label>
                </div>
                <div class="form_input">
                    <input type="mail" id="email_user" name="email_user" required>
                    <label>Email</label>
                </div>
                <!--<div class="form_input">
                    <input type="text" id="numero_secu_social_user" name="numero_secu_social_user">
                    <label>Numéro de sécurité social</label>
                </div>-->
                <div class="form_input">
                    <input type="password" id="password" name="password" required pattern="[a-z0-5]{8,}">
                    <label>Mot de passe</label>
                </div>
                <div class="form_input">
                    <input type="password" id="Cpassword" name="Cpassword" required pattern="[a-z0-5]{8,}">
                    <label>Confirmez le mot de passe</label>
                </div>
                <a href="#" type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Submit
                </a>
            </form>
        </div>

        <!--<h3>Rôles supérieurs</h3>

        <div class="form_input">
            <label for="manager_key">Clé Manager</label>
            <input type="password" id="manager" name="manager">
        </div>

        <div class="form_input">
            <label for="admin_key">Clé Admin</label>
            <input type="password" id="admin" name="admin">
        </div>-->

    </div>
</div>

<?php

$page_content = ob_get_clean();