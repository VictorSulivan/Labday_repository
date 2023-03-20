<?php 
require_once __DIR__ . '/../../init.php';

$page_title = "administratif file";

ob_start();

?>

<h1>Page d'ajout d'un fichier exterieur</h1>
<div>
    <form method="POST" enctype="multipart/form-data">
        <div class="user-box">
            <input type="text" id="nom_etudes_file" name="nom_etudes_file" >
            <label for="nom_etudes_file">Titre du document</label>
        </div>
        <div class="user-box">
            <input type="file" id="etudes_file_content" name="etudes_file_content" >
            <label for="admin_file_content">Contenus</label>
        </div>
        <input type="submit" name="form_add_file_etudes" value="upload_add_file_etudes"/>
    </form>
    <?php
            if(isset($_POST['form_add_file_admin'])){
                if(!empty($_POST['nom_admin_file'])AND !empty($_POST['admin_file_content']) ){
                    $id_user=$_SESSION['user_id'];
                    $type_of_file = "formulaire";
                    $nom_admin_form=$_POST['nom_admin_file'];
                    $nom_admin_formlength = strlen($nom_admin_form);
                    
                    if($nom_admin_formlength<=255){
                        // Vérifier que le formulaire a été soumis
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Vérifier que le fichier a été téléchargé sans erreur
                            if ($_FILES["admin_file_content"]["error"] == UPLOAD_ERR_OK) {
                                // Vérifier le type de fichier
                                $fileType = $_FILES["admin_file_content"]["type"];
                                if ($fileType == "image/jpeg" || $fileType == "image/png") {
                                    // Récupérer le contenu du fichier
                                    $fileContent = file_get_contents($_FILES["admin_file_content"]["tmp_name"]);
                                    
                                    // Préparer la requête SQL
                                    $stmt = $db->prepare("INSERT INTO administration_file (id_user, name_file, type_of_file, file_data, date_insert_administration_file) VALUES (?, ?, ?, ?, NOW())");
                                    // Binder les paramètres
                                    $stmt->bind_param("issb", $id_user, $_POST['nom_admin_file'], $type_of_file, $fileContent);
                                    // Exécuter la requête
                                    $stmt->execute();
                                    // Fermer la connexion à la base de données
                                    $stmt->close();
                                    // Afficher un message de confirmation
                                    $erreur ="Le fichier a été ajouté à la base de données.";
                                    // Redirige l'utilisateur vers la page d'affichage des admin file
                                    //header('Location: /?page=admin_file');
                                    //exit; // Assure que le script s'arrête ici pour éviter toute exécution supplémentaire
                                } else {
                                    $erreur= "Le fichier doit être au format JPEG ou PNG.";
                                }
                            }else {
                                $erreur ="Une erreur s'est produite lors du téléchargement du fichier.";
                            }
                        }else{
                            $erreur="le formulaire n'a pas ete soumis";
                        }
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
//$page_content = ob_get_clean();

