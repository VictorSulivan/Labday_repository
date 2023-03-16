<?php

require_once __DIR__ . '/../../src/init.php';

// Start the session
session_start();

// Login
if (isset($_POST['Connexion'])) {
    $error = false;

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    } else {
        $error = true;
    }

    $password = $_POST['password'];

    if (!$error) {
        $requeteLogin = 'SELECT * FROM users WHERE email = ? AND password = ?';

        // Prepare the statement
        $requeteStatment = $conn->prepare($requeteLogin);

        // Execute the query
        $requeteStatment->execute([$email, hash('sha256', $password)]);

        // Fetch the result
        $requete = $requeteStatment->fetch();

        if (!empty($requete)) {
            $_SESSION['user'] = $requete;
            header('Location: /?page=home');
            exit();
        }
    }
}

// Register
if (isset($_POST['Inscription'])) {
    $error = false;

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
        $number = preg_match('@[0-9]@', $inscription_password);
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
        // Prepare the statement
        $statement = $conn->prepare('INSERT INTO users (nom, prenom, phone, email, password) VALUES (?, ?, ?, ?, ?)');
    }
    // Hash

    if (!$error) {
        $new_mdp = hash('sha256', $inscription_password);

        // Creating a new user in the database
        $insertUserQuery = "INSERT INTO users(nom_u, prenom_u, telephone, email, password) VALUES (?, ?, ?, ?, ?)";
        $statement = $conn->prepare($insertUserQuery);
        $statement->execute([$nom_u, $prenom_u, $telephone, $inscription_email_user, $new_mdp]);

        //header('Location: /?page=login');
        exit();
    } else {
        //header('Location: /?page=login');
        exit();
    }
}
