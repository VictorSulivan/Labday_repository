<?php

require_once __DIR__ . '/../../src/init.php';

//Login
$error = false;

if (isset($_POST['Connexion'])) {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    } else {
        $error = true;
    }

    $password = $_POST['password'];

    if (!$error) {
        $requeteLogin = 'SELECT * FROM users WHERE email = ? AND password = ?';

        $requeteStatment = $conn->prepare($requeteLogin);
        $requeteStatment->execute([$email, hash('sha256', $password)]);
        $requete = $requeteStatment->fetch();

        if (!empty($requete)) {
            if ($requete['role'] == 1000 || $requete['role'] == 200) {
                $_SESSION['user'] = $requete;
                header('Location: /?page=home');
                exit();
            } else if ($requete['role'] == 1 || $requete['role'] == 0) {
                $_SESSION['user'] = $requete;
                header('Location: /?page=home');
                exit();
            } else if ($requete['role'] == 10) {
                $_SESSION['user'] = $requete;
                header('Location: /?page=home');
                exit();
            }
        }
    }
}

//register
$error = false;

if (isset($_POST['Inscription'])) {

    if (isset($_POST['inscription_email_user'])) {
        if (filter_var($_POST['inscription_email_user'], FILTER_VALIDATE_EMAIL)) {
            $inscription_email_user = $_POST['inscription_email_user'];
        } else {
            $error = true;
        }
    } else {
        $error = true;
    }


    $nom_u = $_POST['nom_user'];
    $prenom_u = $_POST['prenom_user'];

    if (isset($_POST['inscription_password'])) {
        $inscription_password = $_POST['inscription_password'];

        $uppercase = preg_match('@[A-Z]@', $inscription_password);
        $lowercase = preg_match('@[a-z]@', $inscription_password);
        $number    = preg_match('@[0-9]@', $inscription_password);
        $specialChars = preg_match('@[^\w]@', $inscription_password);
        if (!$uppercase || !$lowercase || !$number || !$specialChars || mb_strlen($inscription_password) < 8) {
            $error = true;
        }
    } else {
        $error = true;
    }

    if (strlen($_POST['telephone_user']) == 10) {
        $telephone = $_POST['telephone_user'];
    } else {
        $error = true;
    }

    if (isset($_POST['inscription_password']) && isset($_POST['inscription_cpassword'])) {
        if ($_POST['inscription_password'] != $_POST['inscription_cpassword']) {
            $error = true;
        }
    } else {
        $error = true;
    }

    if (!$error) {
        $new_mdp = hash('sha256', $inscription_password);

        $statement->execute([$nom_u, $prenom_u, $phone, $inscription_email_user, $new_mdp]);

        header('Location: /?page=login');
        exit();
    } else {
        header('Location: /?page=login');
        exit();
    }
}
?>