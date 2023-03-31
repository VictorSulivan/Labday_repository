<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "legal file view";

ob_start();

?>

<h1>Page de choix du type de fichier ajoutés pour la section "judiciaire"</h1>

    <div>
        <button class="legal_add_form_path"><a href="/?page=legal_add_file">Inserer un fichier ou rediger un document</a></button> 
        <button class="legal_add_form_path"><a href="/?page=legal_add_form">Ajouter un formulaire</a></button> 
    </div>
<?php


$page_content = ob_get_clean();