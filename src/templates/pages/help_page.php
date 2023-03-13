<?php 
require_once __DIR__ . '/../../init.php';
$page_title = "aide file";
ob_start();
?>
<h1>Page du systeme d'aide administrative</h1>
<div>
    <div>
        <div>
            <h2>Zone du message d'accueil</h2>
        </div>
        <div>
            <h2>espace d'apparition des réponses du bot</h2>
        </div>
    </div>
    <div>
        <div>
            <div>
                <h2>historique utilisateur</h2>
            </div>
            <div>
                <h2>espace d'ecriture pour l'utilisateur </h2>
            </div>
        </div>
    </div>
</div>
<?php
$page_content = ob_get_clean();