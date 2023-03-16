<?php

    require_once __DIR__ . '/../../src/init.php';
?>
/*
    $valid = true;
    $err = array();

    $date = new DateTime('now', new DateTimeZone('Europe/Paris'));
    $date = $date->format('m/d/Y h:i:s a');

    if (isset($_POST['submit'])) {
        $nom_user = trim($_POST['nom_user']);
        $prenom_user = trim($_POST['prenom_user']);
        $deuxieme_prenom_user = trim($_POST['deuxieme_prenom_user']);
        $email_user = trim($_POST['email_user']);
        $password = trim($_POST['password']);
        $cpassword = trim($_POST['cpassword']);

        if (!isset($_POST['email_user'])) {
            $valid = false;
            $err['email_user'] = " Ce champ ne peut pas être vide";
        }
        if (!filter_var($email_user, FILTER_VALIDATE_EMAIL)) {
            $valid = false;
            $err[''] = "Email not valid";
        }
        if (!isset($_POST['password'])) {
            $valid = false;
            $err['password'] = " Ce champ ne peut pas être vide";
        }

        if (!isset($_POST['cpassword'])) {
            $valid = false;
            $err['cpassword'] = "Ce champ ne peut pas être vide";
        }

        if ($password !== $confpassword) {
            $valid = false;
            $err[''] = "Le mot de passe est différent de la confirmation";
        }
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
        } else {
            error_die('La clé manager rentrée est inexacte', '/?page=signup');
        }
    }

    if (!empty($_POST['admin'])) {
        if ($_POST['admin'] == $admin_key) {
            $user_role = 1000;
        } else {
            error_die('La clé admin rentrée est inexacte', '/?page=signup');
        }
    }


    if ($user_role > 1) {
        $account = Account::createAccount($userId, 0, 1);
        $accountId = $accountManager->insertAccount($account);
    }

    $_SESSION['user_id'] = $userId;

    header('Location: /?page=home');
/*