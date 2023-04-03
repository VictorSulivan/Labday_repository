<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "soins file";

ob_start();

?>

<h1>Page des fichiers medicaux</h1>
<div>
    <div>
        <a href="/?page=soins_choose_add_document">Ajouter un document</a>
    </div>
    <div>
        <ul>
            <li><p>emplacement de document</p></li>
            <li><p>emplacement de document</p></li>
            <li><p>emplacement de document</p></li>
            <li><p>emplacement de document</p></li>
            <li><p>emplacement de document</p></li>
            <li><p>emplacement de document</p></li>
        </ul>
    </div>
</div>
<?php


$page_content = ob_get_clean();
