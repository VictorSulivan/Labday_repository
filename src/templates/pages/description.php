<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "describe file";

ob_start();

?>

<h1>Page de description</h1>
<div>
    <div>
        <div>
            <h2>Zone histoire du site</h2>
            <p>ce que l'on voudra raconter dessus</p>
        </div>
        <div>
            <h2>Zone blanche</h2>
            <p>contenu non definis</p>
        </div>
    </div>
    <div>
        <div>
            <h2>Liste des contributeurs avec leurs contributions et une description de leurs profils</h2>
            <ul>
            <li><p>les contributeurs</p></li>
            <li><p>les contributeurs</p></li>
            <li><p>les contributeurs</p></li>
            </ul>
        </div>
    </div>
</div>
<?php


$page_content = ob_get_clean();