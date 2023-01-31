<?php

require_once __DIR__ . '/../../src/init.php';

/*if (!isset($_POST['fullname'], $_POST['email'], $_POST['password'], $_POST['cpassword'])) {
    error_die('Erreur du formulaire', '/?page=signup');
    show_error();
}*/

//error_die($_POST['manager'], '/?page=signup');

if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['cpassword'])) {
    error_die('Veuillez remplir tous les champs', '/?page=signup');
}

if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
    error_die('Email non valide.', '/?page=signup');
}

if (strlen($_POST['password']) < 8) {
    error_die('Mot de passe trop court', '/?page=signup');
}

if ($_POST['password'] != $_POST['cpassword']) {
    error_die('Les deux mots de passe sont différents', '/?page=signup');
}

$alreadyUser = $userManager->getByEmail($_POST['email']);
if ($alreadyUser !== false) {
    error_die('Déjà inscrit', '/?page=signup');
}

$user_role = 1;
$manager_key = 'manager';
$admin_key = 'admin';

if (!empty($_POST['manager']) && !empty($_POST['admin'])) {
    error_die('Vous ne pouvez avoir qu\'un seul rôle', '/?page=signup');
}

if (!empty($_POST['manager'])) {
    if ($_POST['manager'] == $manager_key) {
        $user_role = 200;
    }
    else {
        error_die('La clé manager rentrée est inexacte', '/?page=signup');
    }
}

if (!empty($_POST['admin'])) {
    if ($_POST['admin'] == $admin_key) {
        $user_role = 1000;
    }
    else {
        error_die('La clé admin rentrée est inexacte', '/?page=signup');
    }
}

$user = User::create($_POST['fullname'], $_POST['email'], $_POST['password'], $user_role, $_SERVER['REMOTE_ADDR']);
$userId = $userManager->insert($user);

if ($user_role > 1) {
    $account = Account::createAccount($userId, 0, 1);
    $accountId = $accountManager->insertAccount($account);
}

$_SESSION['user_id'] = $userId;

header('Location: /?page=home');