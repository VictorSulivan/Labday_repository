<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "legal file";

ob_start();

?>

<h1>Page d'ajout d'un formulaire judiciaire</h1>
<div>
    <form method="POST" >
        <div class="user-box">
            <input type="text" id="nom_legal_form" name="nom_legal_form" >
            <label for="nom_legal_form">Titre du document</label>
        </div>
        <div class="user-box">
            <input type="textarea" id="legal_form_content" name="legal_form_content" >
            <label for="legal_form_content">Contenus</label>
        </div>
        <input type="submit" name="form_add_form_legal" value="form_add_form_legal"/>
    </form>
    <?php
            if(isset($_POST['form_add_form_legal']))
            {
                if(!empty($_POST['nom_legal_form'])AND !empty($_POST['legal_form_content']) ){
                    
                    $nom_legal_form = htmlspecialchars($_POST['nom_legal_form']);
                    $legal_form_content = htmlspecialchars($_POST['legal_form_content']);
                    $id_user=$_SESSION['user_id'];
                    $type_of_file = "formulaire";
                    $date_insert_file = "dfg";
                    $nom_legal_formlength = strlen($nom_legal_form);
                    
                    if($nom_legal_formlength<=255){
                        $insertmbr = $db->prepare("INSERT INTO judiciaire_form (id_user, name_file, type_of_file, description_file, date_insert_file) VALUES (?, ?, ?, ?, NOW())");
                        $insertmbr->execute([$id_user,$nom_legal_form,$type_of_file,$legal_form_content]);
                        // Redirige l'utilisateur vers la page d'affichage des legal file
                        header('Location: /?page=legal_file');
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