<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "etudes file";

ob_start();

?>

<h1>Page d'ajout d'un formulaire etudes</h1>
<div>
    <form method="POST" >
        <div class="user-box">
            <input type="text" id="nom_etudes_form" name="nom_etudes_form" >
            <label for="nom_etudes_form">Titre du document</label>
        </div>
        <div class="user-box">
            <input type="textarea" id="etudes_form_content" name="etudes_form_content" >
            <label for="etudes_form_content">Contenus</label>
        </div>
        <input type="submit" name="form_add_form_etudes" value="form_add_form_etudes"/>
    </form>
    <?php
            if(isset($_POST['form_add_form_etudes']))
            {
                if(!empty($_POST['nom_etudes_form'])AND !empty($_POST['etudes_form_content']) ){
                    
                    $nom_etudes_form = htmlspecialchars($_POST['nom_etudes_form']);
                    $etudes_form_content = htmlspecialchars($_POST['etudes_form_content']);
                    $id_user=$_SESSION['user_id'];
                    $type_of_file_etudes = "formulaire";
                    $nom_etudes_formlength = strlen($nom_etudes_form);
                    
                    if($nom_etudes_formlength<=255){
                        $insertmbr = $db->prepare("INSERT INTO etudes_docs (id_user, name_file, type_of_file, description_file, date_insert_file) VALUES (?, ?, ?, ?, NOW())");
                        $insertmbr->execute([$id_user,$nom_etudes_form,$type_of_file_etudes,$etudes_form_content]);
                        // Redirige l'utilisateur vers la page d'affichage des etudes file
                        header('Location: /?page=etudes_file');
                        exit; // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
                               
                    }else{
                        $erreur= "erreur nom trop long moins de 255 caractere please";
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
<?php


$page_content = ob_get_clean();