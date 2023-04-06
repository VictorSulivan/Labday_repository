<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "News";

ob_start();

?>

<h1>Page d'information</h1>

<div>
    <div>
        <h2>les plus recents</h2>
    </div>
    <div>
        <ul>
            <li><img src="" alt=""><p>article</p></li>
            <li><img src="" alt=""><p>article</p></li>
            <li><img src="" alt=""><p>article</p></li>
            <li><img src="" alt=""><p>article</p></li>
            <li><img src="" alt=""><p>article</p></li>
            <li><img src="" alt=""><p>article</p></li>
            <li><img src="" alt=""><p>article</p></li>
        </ul>
    </div>
</div>

<?php

$page_content = ob_get_clean();