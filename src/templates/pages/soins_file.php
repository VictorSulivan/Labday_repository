<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "soins file";

ob_start();

?>

<h1>Page des fichiers medicaux</h1>
<div>
    <div>
        <p>ajouter un fichier</p>    
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
