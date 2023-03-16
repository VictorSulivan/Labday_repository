<?php 

$page_title = "Connexion";

$head_metas = "<link rel=stylesheet href=assets/CSS/login.css>";

ob_start();

?>

<div class = All>

    <div class="login-box">
        <h2>Connection</h2>
        <form>
            <div class="user-box">
                <input type="text" id="nameconnect" name="nameconnect" required>
                <label>Nom</label>
            </div>
            <div class="user-box">
                <input type="text" id="prenameconnect" name="prenameconnect" required>
                <label>Prénom</label>
            </div>
            <div class="user-box">
                <input type="password" id="passwordconnect" name="passwordconnect" required>
                <label>Mot de passe</label>
            </div>
            <input type="submit" name="loginsubmitbutton" id="loginsubmitbutton" value="Se connecter!"/>
        </form>
        <?php
            if(isset($_POST['loginsubmitbutton']))

            {
                $servername = "localhost";
                $username = "root";
                $dbpassword = "root";
                $dbname = "projet_labday";
                $conn = mysqli_connect($servername, $username, $dbpassword, $dbname);
                $nomconnect = htmlspecialchars($_POST['nom_user']);
                    $prenomconnect = htmlspecialchars($_POST['prenom_user']);
                    $passwordconnect = sha1($_POST['password']);
                if(!empty($_POST['nameconnect'])AND !empty($_POST['prenameconnect'])AND !empty($_POST['passwordconnect']))
                {
                    
                     // Préparer la requête SQL
                    $verifuser =$conn->prepare("SELECT * FROM users WHERE prenom = ? and nom = ? and password = ? " );
                    $verifuser->execute(array($prenomconnect,$nomconnect,$passwordconnect));
                    $userexist= $verifuser->rowCount();
                    if($userexist==1){
                        echo "lets go! you are a boss";
                        // Redirige l'utilisateur vers la page de profile
                        header('Location: /?page=profile');
                        exit; // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire

                    }else{
                        $erreur="Mauvais prenom,nom ou mdp" ;
                    }
                                
                
                
                }else{
                    $erreur ="tout les champs doivent etre complétés";
                }
            }
            
            if(isset($erreur)){
                echo $erreur;
            }
?>
    </div>

</div>

<?php

$page_content = ob_get_clean();