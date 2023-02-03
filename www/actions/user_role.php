<?php

require_once __DIR__ . "/../../src/init.php";

if (isset($_POST['verify'])) {
    if (!empty($_POST['select'])) {
        $account = Account::createAccount($_POST['select'], 0, 1);
        $accountId = $accountManager->insertAccount($account);

        $stmh = $db->prepare('UPDATE users SET role=10 WHERE id=?');
        $stmh->execute([
            $_POST['select']
        ]);
    }
    else {
        error_die('Veuillez sélectionner un utilisateur',  '/?page=account_verification');
    }
}

if (isset($_POST['ban'])) {
    if (!empty($_POST['select'])) {
        $stmh = $db->prepare('UPDATE users SET role=0 WHERE id=?');
        $stmh->execute([
            $_POST['select']
        ]);
    }
    
    else {
        error_die('Veuillez sélectionner un utilisateur',  '/?page=account_verification');
    }
}

header('Location: /?page=account_verification');
