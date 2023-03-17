<?php
session_start();

// Détruit la session et redirige vers la page de connexion
session_destroy();
header('Location: /?page=profile');
exit();
?>