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
                <input type="text" id="name" name="name" required>
                <label>Nom</label>
            </div>
            <div class="user-box">
                <input type="text" id="prename" name="prename" required>
                <label>Prénom</label>
            </div>
            <div class="user-box">
                <input type="password" id="password" name="password" required>
                <label>Mot de passe</label>
            </div>
            <a href="#" type="submit">
            Submit
            </a>
        </form>
    </div>

</div>

<?php

$page_content = ob_get_clean();