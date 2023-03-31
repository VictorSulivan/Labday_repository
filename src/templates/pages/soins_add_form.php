<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "soins file";

ob_start();

?>

<h1>Page d'ajout d'un formulaire soins</h1>
<div>
    <form method="POST" >
        <div class="user-box">
            <input type="text" id="nom_soins_form" name="nom_soins_form" >
            <label for="nom_soins_form">Titre du document</label>
        </div>
        <div class="user-box">
            <input type="textarea" id="soins_form_content" name="soins_form_content" >
            <label for="soins_form_content">Contenus</label>
        </div>
        <input type="submit" name="form_add_form_soins" value="form_add_form_soins"/>
    </form>
    <?php
            if(isset($_POST['form_add_form_soins']))
            {
                if(!empty($_POST['nom_soins_form'])AND !empty($_POST['soins_form_content']) ){
                    
                    $nom_soins_form = htmlspecialchars($_POST['nom_soins_form']);
                    $soins_form_content = htmlspecialchars($_POST['soins_form_content']);
                    $id_user=$_SESSION['user_id'];
                    $type_of_file = "formulaire";
                    $date_insert_file = "dfg";
                    $nom_soins_formlength = strlen($nom_soins_form);
                    
                    if($nom_soins_formlength<=255){
                        $insertmbr = $db->prepare("INSERT INTO soins_docs (id_user, name_file, type_of_file, description_file, date_insert_file) VALUES (?, ?, ?, ?, NOW())");
                        $insertmbr->execute([$id_user,$nom_soins_form,$type_of_file,$soins_form_content]);
                        // Redirige l'utilisateur vers la page d'affichage des soins file
                        header('Location: /?page=soins_file');
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