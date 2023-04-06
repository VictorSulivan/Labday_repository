<?php

require_once __DIR__ . '/../../init.php';

$page_title = "administratif file";
$head_metas = "<link rel=stylesheet href=assets/CSS/admin_file.css>";
$page_scripts = "<link rel=stylesheet href=assets/JS/profile.js>";

ob_start();

?>



<h1 class="administratif">Page des fichiers administratif</h1>







<?php
// Execute the query and fetch the results
$requete = $db->query('SELECT * FROM administration_docs');
$reponses = $requete->fetchAll();
?>
<div>
    <a href="/?page=admin_choose_add_document">Ajouter un document</a>
</div>
<table class="table-responsive">
    <thead>
        <tr>
            <th>Nom du fichier</th>
            <th>description du fichier</th>
            <th>date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($reponses as $reponse) : ?>
            <tr>
                <td><?= $reponse['name_file']; ?></td>
                <td><?= $reponse['description_file']; ?></td>
                <td><?= $reponse['date_insert_file']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php

$page_content = ob_get_clean();

?>