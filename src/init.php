<?php
session_start();

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/db.php';

//fonctions utilitaires
require_once __DIR__ . '/utils/errors.php';

//pages existantes sur notre site internet
$pages = ['home', 'login', 'signup', 'operations', 'account_verification', 'operations/deposit', 'operations/withdraw', 'operations/transaction', 'operations/conversion',
'operations/conversion', 'operation_verification', 'profile'
];

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
