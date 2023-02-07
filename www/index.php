<?php
require_once "../src/init.php";

$page = 'home';

if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $pages)) {
        $page = $_GET['page'];
    }
}


include_once "../src/templates/pages/$page.php";
include_once "../src/templates/template.php";
