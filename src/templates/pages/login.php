<?php 

$page_title = "Connexion";

$head_metas = "<link rel=stylesheet href=assets/CSS/login.css>";

ob_start();

?>

<div class = All>

    <div class="login-box">
        <h2>Connection</h2>
        <form>
            <div class="user-box">
                <input type="text" id="fullname" name="fullname" required>
                <label>Nom</label>
            </div>
            <div class="user-box">
                <input type="text" id="fullname" name="fullname" required>
                <label>Prénom</label>
            </div>
            <div class="user-box">
                <input type="password" id="password" name="password" required>
                <label>Mot de passe</label>
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

</div>

<?php

$page_content = ob_get_clean();