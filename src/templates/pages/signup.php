<?php 

$page_title = "Inscription";

$head_metas = "<link rel=stylesheet href=assets/CSS/signup.css>";

ob_start();

?>

<div class="All"></div>

    <div id="center">

        <?php
        include_once __DIR__ . '/../partials/alert_errors.php';
        include_once __DIR__ . '/../partials/alert_success.php';
        include_once __DIR__ . '/../../db.php';
        ?>

        <div class="login-box">
            <h2>Inscription</h2>
            <form method="POST" >
                <div class="user-box">
                    <input type="text" id="nom_user" name="nom_user" >
                    <label for="nom_user">Nom</label>
                </div>
                <div class="user-box">
                    <input type="text" id="prenom_user" name="prenom_user" >
                    <label for="prenom_user">Prénom</label>
                </div>
                <div class="form_input">
                    <input type="text" id="deuxieme_prenom_user" name="deuxieme_prenom_user">
                    <label for="deuxieme_prenom_user">Deuxième prénom</label>
                </div>
                <div class="user-box">
                    <input type="datetime-local" id="date_de_naissance_user" name="date_de_naissance_user" >
                    <label for="date_de_naissance_user">Date de naissance</label>
                </div>
                <div class="user-box">
                    <input type="text" id="adresse_domicile_user" name="adresse_domicile_user" >
                    <label for="adresse_domicile_user">Adresse</label>
                </div>
                
                <div class="user-box">
                    <input type="email" id="email_user" name="email_user" >
                    <label for="email_user">Email</label>
                </div>
               
                <div class="user-box">
                    <input type="password" id="password" name="password" >
                    <label for="password">Mot de passe</label>
                </div>
                <div class="user-box">
                    <input type="password" id="Cpassword" name="Cpassword"  >
                    <label for="Cpassword">Confirmez le mot de passe</label>
                </div>
                <input type="submit" name="forminscription" value="inscription"/>
            </form>
            <?php
            if(isset($_POST['forminscription']))
            {
                if(!empty($_POST['nom_user'])AND !empty($_POST['prenom_user'])AND !empty($_POST['date_de_naissance_user'])AND !empty($_POST['adresse_domicile_user'])AND !empty($_POST['password'])AND !empty($_POST['Cpassword']) ){
                    $nom = htmlspecialchars($_POST['nom_user']);
                    $prenom = htmlspecialchars($_POST['prenom_user']);
                    $deuxiemeprenom=htmlspecialchars($_POST['deuxieme_prenom_user']);
                    $date_de_naissance_user = htmlspecialchars($_POST['date_de_naissance_user']);
                    $adresse_domicile_user = htmlspecialchars($_POST['adresse_domicile_user']);
                    $role=0;
                    $password = sha1($_POST['password']);
                    $Cpassword = sha1($_POST['Cpassword']);
                    $mail = htmlspecialchars($_POST['email_user']);
                    $nomlength = strlen($nom);
                    $prenomlength = strlen($prenom);
                    
                    if($nomlength<=255){
                        if($prenomlength<=255){
                            
                            if($password==$Cpassword){
                                if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
                                    // Vérification si l'utilisateur existe déjà dans la base de données
                                    $stmt = $db->prepare('SELECT * FROM users WHERE email = ?');
                                    $stmt->execute([$mail]);
                                    $user = $stmt->fetch();

                                    if ($user) {
                                        // Si l'utilisateur existe déjà, affichage d'un message d'erreur
                                        echo 'Cet email est déjà utilisé, veuillez en choisir un autre.';
                                    } else {
                                        $insertmbr = $db->prepare("INSERT INTO users (nom, prenom, deuxieme_prenom, role, adresse_domicile, date_de_naissance, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                                        $insertmbr->execute([$nom, $prenom, $deuxiemeprenom, $role, $adresse_domicile_user, $date_de_naissance_user, $mail, $password]);
                                        // Redirige l'utilisateur vers la page de connexion
                                        header('Location: /?page=login');
                                        exit; // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
                                       
                                        }           
                                    
                                }else{
                                    $erreur = "c'est pas une adresse mail valide ca!";
                                }

                            }else{
                                $erreur="le mot de passe et la verification de mot de passe doivent etre identiques";
                            }

                        }else{
                            $erreur= "erreur prenom trop long moins de 255 caractere please";
                        }
                    }else{
                        $erreur= "erreur nom trop long moins de 255 caractere please";
                    }
                
                }
                else{
                    $erreur ="tout les champs doivent etre complétés";
                }
            }
            
            if(isset($erreur)){
                echo $erreur;
            }
?>
        </div>
    </div>
</div>

<?php

$page_content = ob_get_clean();