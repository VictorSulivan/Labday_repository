<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "help page";

ob_start();

?>

<h1>Page d'aide utilisateur</h1>
<div>
   
</div>
<?php


$page_content = ob_get_clean();
