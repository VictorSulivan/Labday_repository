<?php

//la variable dsn v
//protocol:
//mysql:host=C_DB_HOST; dbname=C_DB_NAME; port=C_DB_PORT

// require_once __DIR__ . '/config.php';

try {
    $dsn = 'mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'].';port='.$config['db']['port'];
    $db = new PDO($dsn, $config['db']['user'], $config['db']['pass']);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e){
    die('Erreur MySQL : ' . $e -> getMessage());
}
