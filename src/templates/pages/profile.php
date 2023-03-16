<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "profil user!";

ob_start();

?>
<?php
if(isset($_GET['id']) and $_GET['id']>0){
    $getid=intval($_GET['id']);
    $requprofilone=$conn->prepare('SELECT * FROM users WHERE id=?');
    $requprofilone->execute(array($getid));
    $userinfo=$requprofilone->fetch();
}
?>

<h1>Page de profil de <p>prenom:<?php echo $userinfo['prenom'];?></h1>

<div>
    <div>
        <div>
            <h3>
                Information de profil
            </h3>
            <p>prenom:<?php echo $userinfo['prenom'];?>
        </div>
        <div>
            <!--phto du profil
                <img src="" alt="">-->
                <p>photo</p>
        </div>
    </div>
    <div>
        <div>
            <h4>
                Informations principales
            </h4>
            <p>info secondaire</p>
        </div>
        <div>
            <h4>
                Informations secondaires
            </h4>
            <p>info secondaire</p>
        </div>
    </div>
</div>


<?php

$page_content = ob_get_clean();