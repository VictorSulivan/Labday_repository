<?php

require_once __DIR__ . '/../../init.php';

$page_title = "judicaire";

ob_start();

?>admin

<h1>Page des fichiers administratif</h1>
<div>
    <div>
        <p>ajouter un fichier</p>
    </div>
    <div>
        <ul>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
            <li>
                <p>emplacement de document</p>
            </li>
        </ul>
    </div>
</div>

<?php
$page_content = ob_get_clean();
