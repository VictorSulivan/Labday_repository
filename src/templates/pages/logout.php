<?php
session_start();

// Détruit la session et redirige vers la page de connexion
session_unset();
session_destroy();
header('Location: /?page=home');
//exit();
