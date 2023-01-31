<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "News";

ob_start();

?>

<h1>Page d'information</h1>

<?php
if ($user == false) {
     ?>
        <h2>Les nouvelles news!!!</h2>
    
   
<?php 
}

if ($user !== false) {
    if ($user->role >= 0) { ?>
        <h2>Les nouvelles news!!!</h2>
    
   
<?php }
}



$page_content = ob_get_clean();