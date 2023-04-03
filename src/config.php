<?php

$config = [];
$config['db'] = [
    'host' => 'localhost',
    'name' => 'projet_labday',
    'user' => 'root',
    'pass' => 'root',
    'port' => 3306

];

$config['role'] = [
    0 => "Utilisateur Banni",
    1 => "Utilisateur Non-Vérifié",
    10 => "Utilisateur Vérifié",
    20 => "Soins",
    30 => "Etudes",
    40 => "judiciaire",
    200 => "Administrations",
    1000 => "Admin"

];

$config['status'] = [
    0 => "Opération refusée",
    50 => "Opération en cours d'analyse",
    100 => "Opération effectuée"
];