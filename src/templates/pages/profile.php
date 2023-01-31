<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "Profil";

$head_metas = "<link rel=stylesheet href=assets/CSS/profil.css>";

ob_start();

$stmh = $db->prepare('SELECT fullname FROM users WHERE id = ?');
        $stmh->execute([$_SESSION['user_id']]);
        $user_name = $stmh->fetch();

?>

<h1><?=$user_name['fullname']?> </h1>

<?php

if ($user != false) {

    if ($user->role == 1) { ?>

        <h3>Votre compte est en cours de vérification par un administrateur</h3>
    
    <?php } else if ($user->role > 1){ 
        
        $stmh = $db->prepare('SELECT money, id FROM bankaccounts WHERE id_user = ?');
        $stmh->execute([$_SESSION['user_id']]);
        $actual_money = $stmh->fetch();
        
        $stmh = $db->prepare('SELECT name FROM currencies WHERE id = 1');
        $stmh->execute();
        $actual_currency = $stmh->fetch();
        ?>

        <h3>Votre compte en banque : </h3>

        <p>Vous avez <?=$actual_money['money']?> <?=$actual_currency['name']?>s sur votre compte</p>

    <?php

        $stmh = $db->prepare('SELECT * FROM bankaccounts WHERE id_user = ?');
        $stmh->execute([$_SESSION['user_id']]);
        $usr_profile = $stmh->fetch();

        ?>

        <h2>Dernières opérations</h2>

        <h3>Dépôts</h3>

        <?php

        $stmh = $db->prepare('SELECT * FROM deposits WHERE id_bank_account=? AND status=100 ORDER BY operation_date DESC LIMIT 10');
        $stmh->execute([$usr_profile['id']]);
        $last_deposits = $stmh->fetchAll();

        /*$date = new DateTime($this->created_at);
        return $date->format('d/m/Y'. 'à' .'H:i');*/

        foreach ($last_deposits as $ld) {
            $date = new DateTime($ld['operation_date']);
            $date = $date->format('d/m/Y'.  ' à ' .'H:i');
            echo '<span class="operation">Dépôt de '.$ld['value'].' Euros';
            echo ' le '.$date.'</span><br>';
        }

        ?>

        <h3>Retraits</h3>

        <?php

        $stmh = $db->prepare('SELECT * FROM withdrawals WHERE id_bank_account=? AND status=100 ORDER BY operation_date DESC LIMIT 10');
        $stmh->execute([$usr_profile['id']]);
        $last_withdrawals = $stmh->fetchAll();

        foreach ($last_withdrawals as $lw) {
            $date = new DateTime($lw['operation_date']);
            $date = $date->format('d/m/Y'.  ' à ' .'H:i');
            echo '<span class="operation">Retrait de '.$lw['value'].' Euros';
            echo ' le '.$date.'</span><br>';
        }

        ?>

        <h3>Transactions</h3>

        <h4>Effectuées</h4>

        <?php

        $stmh = $db->prepare('SELECT * FROM transactions WHERE sender_account=? ORDER BY operation_date DESC LIMIT 10');
        $stmh->execute([$usr_profile['id']]);
        $last_transactions = $stmh->fetchAll();

        foreach ($last_transactions as $lt){
            $stmh = $db->prepare('SELECT * FROM bankaccounts WHERE id=?');
            $stmh->execute([$lt['receiver_account']]);
            $receiver = $stmh->fetch();

            //echo $lt['receiver_account'];

            $stmh = $db->prepare('SELECT * FROM users WHERE id=?');
            $stmh->execute([$receiver['id_user']]);
            $receiver_name = $stmh->fetch();

            $date = new DateTime($lt['operation_date']);
            $date = $date->format('d/m/Y'.  ' à ' .'H:i');

            //echo $receiver_name['fullname'];

            echo '<span class="operation">Envoi de '.$lt['value'].' Euros à '.$receiver_name['fullname'];
            echo ' le '.$date.'</span><br>';

        }

        ?>

        <h4>Reçues</h4>

        <?php

        $stmh = $db->prepare('SELECT * FROM transactions WHERE receiver_account=? ORDER BY operation_date DESC LIMIT 10');
        $stmh->execute([$usr_profile['id']]);
        $last_transactions = $stmh->fetchAll();

        foreach ($last_transactions as $lt){
            $stmh = $db->prepare('SELECT * FROM bankaccounts WHERE id=?');
            $stmh->execute([$lt['sender_account']]);
            $sender = $stmh->fetch();

            $stmh = $db->prepare('SELECT * FROM users WHERE id=?');
            $stmh->execute([$sender['id_user']]);
            $sender_name = $stmh->fetch();

            $date = new DateTime($lt['operation_date']);
            $date = $date->format('d/m/Y'.  ' à ' .'H:i');

            echo '<span class="operation">Reçu '.$lt['value'].' Euros de '.$sender_name['fullname'];
            echo ' le '.$date.'</span><br>';

        } 
    }
        
}

$page_content = ob_get_clean();
