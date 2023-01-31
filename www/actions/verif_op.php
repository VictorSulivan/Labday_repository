<?php

require_once __DIR__ . "/../../src/init.php";

//error_die($_SESSION['user_id'],  '/?page=operation_verification');

date_default_timezone_set("Europe/paris");

//Pour les dépôts
if (isset($_POST['accept_d'])) {
    if (!empty($_POST['select_d'])) {

        $things = explode(",", $_POST['select_d']);

        $stmh = $db->prepare('SELECT * FROM deposits WHERE id = ?');
        $stmh->execute([$things[1]]);
        $utilisateur = $stmh->fetch();
        
        $operationManager->deposit($things[0], $utilisateur['value']);

        $now = date("Y-m-d H:i:s");

        $stmh = $db->prepare('UPDATE deposits SET status=100, operation_date=?, admin_id=? WHERE id=? AND status=50');
        $stmh->execute([
            $now,
            $_SESSION['user_id'],
            $things[1]
        ]);
    }
    else {
        error_die('Veuillez sélectionner une opération',  '/?page=operation_verification');
    }
}

if (isset($_POST['deny_d'])) {
    if (!empty($_POST['select_d'])) {

        $things = explode(",", $_POST['select_d']);

        $stmh = $db->prepare('UPDATE deposits SET status=0, admin_id=? WHERE id=? AND status=50');
        $stmh->execute([
            $_SESSION['user_id'],
            $things[1]
        ]);
    }
    
    else {
        error_die('Veuillez sélectionner une opération',  '/?page=operation_verification');
    }
}


//Pour les retraits
if (isset($_POST['accept_w'])) {
    if (!empty($_POST['select_w'])) {

        $things = explode(",", $_POST['select_w']);

        $stmh = $db->prepare('SELECT * FROM withdrawals WHERE id = ?');
        $stmh->execute([$things[1]]);
        $utilisateur = $stmh->fetch();
        
        $operationManager->withdraw($things[0], $utilisateur['value']);

        $now = date("Y-m-d H:i:s");

        $stmh = $db->prepare('UPDATE withdrawals SET status=100, operation_date=?, admin_id=? WHERE id=?');
        $stmh->execute([
            $now,
            $_SESSION['user_id'],
            $things[1]
        ]);
    }
    else {
        error_die('Veuillez sélectionner une opération',  '/?page=operation_verification');
    }
}

if (isset($_POST['deny_w'])) {
    if (!empty($_POST['select_w'])) {

        $things = explode(",", $_POST['select_w']);

        $stmh = $db->prepare('UPDATE withdrawals SET status=0, admin_id=? WHERE id=?');
        $stmh->execute([
            $_SESSION['user_id'],
            $things[1]
        ]);
    }
    
    else {
        error_die('Veuillez sélectionner une opération',  '/?page=operation_verification');
    }
}

header('Location: /?page=operation_verification');
