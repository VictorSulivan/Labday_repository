<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "administratif file view";

ob_start();

?>

<h1>Page de choix du type de fichier ajoutés pour la section "les etudes"</h1>

    <div>
        <button class="etudes_add_form_path"><a href="/?page=etudes_add_file">Inserer un fichier ou rediger un document</a></button> 
        <button class="etudes_add_form_path"><a href="/?page=etudes_add_form">Ajouter un formulaire</a></button> 
    </div>
<?php


$page_content = ob_get_clean();