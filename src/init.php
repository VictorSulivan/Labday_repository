<?php
session_start();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';

//fonctions utilitaires
require_once __DIR__ . '/utils/errors.php';

/* if ($roleadmin['role'] == 1000) {
    $pages = ['login', 'espaceClient', 'espaceAdmin', 'validationUsers', 'clientListe', 'accueil', 'mon_espace', 'mes_comptes', 'mes_transactions', 'mes_virements', 'utilisateurs', 'validations', 'transactions', 'espaceFondateur', 'initialisation'];
} else if ($roleadmin['role'] == 1000 || $roleadmin['role'] == 200) {
    $pages = ['login', 'espaceClient', 'espaceAdmin', 'validationUsers', 'clientListe', 'accueil', 'mon_espace', 'mes_comptes', 'mes_transactions', 'mes_virements', 'utilisateurs', 'validations', 'transactions'];
} else if ($roleadmin['role'] == 1 || $roleadmin['role'] == 0) {
    $pages = ['login', 'accueil'];
} else if ($roleadmin['role'] == 10) {
    $pages = ['login', 'espaceClient', 'accueil', 'mon_espace', 'mes_comptes', 'mes_transactions', 'mes_virements', 'utilisateurs', 'validations', 'transactions'];
} */

//pages existantes sur notre site internet
$pages = ['home', 'login', 'signup','account_verification','operations/conversion','profile','info','contact','admin_file','etudes_file','soins_file','settings','description','procedures','aide'];

//init variables vides pour le template
$head_metas = "";
$page_content = "";
$page_scripts = "";

//Inclure les classes
require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/class/Account.php';
require_once __DIR__ . '/class/Operation.php';

//Inclure les managers
require_once __DIR__ . '/class/UserManager.php';
require_once __DIR__ . '/class/AccountManager.php';
require_once __DIR__ . '/class/OperationManager.php';

//Initialiser les managers
$userManager = new UserManager($db);
$accountManager = new AccountManager($db);
$operationManager = new OperationManager($db);

//Session & Auth
$user = false;
if (isset($_SESSION['user_id'])) {
    $user = $userManager->getById($_SESSION['user_id']);
}