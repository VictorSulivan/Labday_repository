<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "administratif file view";

ob_start();

?>

<h1>Page de choix du type de fichier ajoutés pour la section "l'administration"</h1>

    <div>
        <button class="admin_add_form_path"><a href="/?page=admin_add_file">Inserer un fichier ou rediger un document</a></button> 
        <button class="admin_add_form_path"><a href="/?page=admin_add_form">Ajouter un formulaire</a></button> 
    </div>
<?php


$page_content = ob_get_clean();
