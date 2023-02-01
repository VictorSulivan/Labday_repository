<?php 

$page_title = "Inscription";

$head_metas = "<link rel=stylesheet href=assets/CSS/signup.css>";

ob_start();

?>

<h1>Inscription</h1>

<div id="center">

<form action="/actions/signup.php" method="post" name="signup_form" id="signup_form">

    <?php
    include_once __DIR__ . '/../partials/alert_errors.php';
    include_once __DIR__ . '/../partials/alert_success.php';
    ?>

    <div class="form_input">
        <label for="nom_user">Nom </label>
        <input type="text" id="nom_user" name="nom_user">
    </div>
    <div class="form_input">
        <label for="prenom_user">Prenom</label>
        <input type="text" id="prenom_user" name="prenom_user">
    </div>
    <div class="form_input">
        <label for="deuxieme_prenom_user">deuxieme prenom</label>
        <input type="text" id="deuxieme_prenom_user" name="deuxieme_prenom_user">
    </div>
    <div class="form_input">
        <label for="date_de_naissance_user">date_de_naissance</label>
        <input type="text" id="date_de_naissance_user" name="date_de_naissance_user">
    </div>
    <div class="form_input">
        <label for="adresse_domicile_user">adresse domicile</label>
        <input type="text" id="adresse_domicile_user" name="adresse_domicile_user">
    </div>
    <div class="form_input">
        <label for="telephone_user">telephone</label>
        <input type="text" id="telephone_user" name="telephone_user">
    </div>
    <div class="form_input">
        <label for="email_user">email</label>
        <input type="text" id="email_user" name="email_user">
    </div>
    <div class="form_input">
        <label for="status_marital_user">status marital</label>
        <input type="text" id="status_marital_user" name="status_marital_user">
    </div>
    <div class="form_input">
        <label for="numero_secu_social_user">numero secu social</label>
        <input type="text" id="numero_secu_social_user" name="numero_secu_social_user">
    </div>
    <div class="form_input">
        <label for="password">password</label>
        <input type="password" id="password" name="password">
    </div>
    <div class="form_input">
        <label for="Cpassword">Confirmez password</label>
        <input type="password" id="Cpassword" name="Cpassword">
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

    <button type="submit">Signup</button>

</form>

</div>

<?php

$page_content = ob_get_clean();
