<?php 

require_once __DIR__ . '/../../init.php';

$page_title = "administratif file";

ob_start();

?>

<h1>Page d'ajout d'un formulaire administratif</h1>
<div>
    <form method="POST" >
        <div class="user-box">
            <input type="text" id="nom_admin_form" name="nom_admin_form" >
            <label for="nom_admin_form">Titre du document</label>
        </div>
        <div class="user-box">
            <input type="textarea" id="admin_form_content" name="admin_form_content" >
            <label for="admin_form_content">Contenus</label>
        </div>
        <input type="submit" name="form_add_form_admin" value="form_add_form_admin"/>
    </form>
    <?php
            if(isset($_POST['form_add_form_admin']))
            {
                if(!empty($_POST['nom_admin_form'])AND !empty($_POST['admin_form_content']) ){
                    
                    $nom_admin_form = htmlspecialchars($_POST['nom_admin_form']);
                    $admin_form_content = htmlspecialchars($_POST['admin_form_content']);
                    $id_user=$_SESSION['user_id'];
                    $type_of_file = "formulaire";
                    $date_insert_file = "dfg";
                    $nom_admin_formlength = strlen($nom_admin_form);
                    
                    if($nom_admin_formlength<=255){
                        $insertmbr = $db->prepare("INSERT INTO administration_docs (id_user, name_file, type_of_file, description_file, date_insert_file) VALUES (?, ?, ?, ?, NOW())");
                        $insertmbr->execute([$id_user,$nom_admin_form,$type_of_file,$admin_form_content]);
                        // Redirige l'utilisateur vers la page d'affichage des admin file
                        header('Location: /?page=admin_file');
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