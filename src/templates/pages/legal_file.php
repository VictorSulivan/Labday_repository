<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "legal file";

ob_start();

?>

<h1>Page des fichiers judiciaire</h1>
<div>
    <div>
        <a href="/?page=legal_choose_add_document">Ajouter un document</a>
    </div>
    <div>
        <ul>
            <li><p>emplacement de document</p></li>
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