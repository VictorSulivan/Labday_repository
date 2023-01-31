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
        <label for="fullname">Nom complet</label>
        <input type="text" id="fullname" name="fullname">
    </div>

    <div class="form_input">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
    </div>
    <div class="form_input">
        <label for="password">Mot de Passe</label>
        <input type="password" id="password" name="password">
    </div>
    <div class="form_input">
        <label for="cpassword">Confirmation</label>
        <input type="password" id="cpassword" name="cpassword">
    </div>

    <h3>Rôles supérieurs</h3>

    <div class="form_input">
        <label for="manager_key">Clé Manager</label>
        <input type="password" id="manager" name="manager">
    </div>

    <div class="form_input">
        <label for="admin_key">Clé Admin</label>
        <input type="password" id="admin" name="admin">
    </div>

    <button type="submit">Signup</button>

</form>

</div>

<?php

$page_content = ob_get_clean();
