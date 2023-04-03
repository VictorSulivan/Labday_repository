<?php

require_once __DIR__ . '/../../init.php';

$page_title = "administratif file";

ob_start();

?>

<h1>Page des fichiers administratif</h1>
<div>
    <div>
        <p>ajouter un fichier</p>
    </div>

    <?php
    // Execute the query and fetch the results
    $requete = $db->query('SELECT * FROM administration_docs');
    $reponses = $requete->fetchAll();
    ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Nom du fichier</th>
                <th>type du fichier</th>
                <th>description du fichier</th>
                <th>date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reponses as $reponse) : ?>
                <tr>
                    <td><?= $reponse['id_user']; ?></td>
                    <td><?= $reponse['name_file']; ?></td>
                    <td><?= $reponse['type_of_file']; ?></td>
                    <td><?= $reponse['description_file']; ?></td>
                    <td><?= $reponse['date_insert_file']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



    <?php

    $page_content = ob_get_clean();

    ?>