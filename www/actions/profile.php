<?php

require_once __DIR__ . "/../../src/init.php";


$stmh = $db->prepare('SELECT money, id FROM bankaccounts WHERE id_user = ?');
$stmh->execute([$utilisateur['id']]);
$actual_money = $stmh->fetch();

$stmh = $db->prepare('SELECT name FROM currencies WHERE id_currencies = ?');
$stmh->execute([$utilisateur['id']]);
$actual_currencie = $stmh->fetch();

foreach ($actual_money as $actual_currencie) {
    $money_currencie = array_search($usr['role'], $config);
    echo 'Utilisateur : ' . $usr['email'] . ';    Role : ' . $config['roles'][$usr['role']] . '<br>';

}