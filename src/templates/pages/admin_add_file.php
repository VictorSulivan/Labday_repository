<?php 
require_once __DIR__ . '/../../init.php';

$page_title = "administratif file";

ob_start();

?>

<h1>Page d'ajout d'un fichier exterieur</h1>
<div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="nom_fichier">Nom du fichier :</label>
		<input type="text" name="nom_fichier" id="nom_fichier"><br><br>
		
		<label for="fichier">Fichier :</label>
		<input type="file" name="fichier" id="fichier"><br><br>
		
		<input type="submit" name="submit" value="Uploader">
    </form>
<?php
    // Connexion à la base de données
    $host_serveur = 'localhost';
    $dbname_serveur = 'file_categories';
    $username_serveur = 'victor';
    $password_serveur = '';
    try {
        $pdo = new PDO("mysql:host=$host_serveur;dbname=$dbname_serveur;charset=utf8;port=3308',$username_serveur, $password_serveur");
        // Configuration de PDO pour afficher les erreurs SQL
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }

    // Vérification que le formulaire a bien été soumis
    if(isset($_POST["submit"])) {
        // Récupère les informations du fichier uploadé
    $nom_fichier = htmlspecialchars($_POST['nom_fichier']);
    $taille_fichier = $_FILES['fichier']['size'];
    $type_fichier = $_FILES['fichier']['type'];
    $contenu_fichier = file_get_contents($_FILES['fichier']['tmp_name']);
    $id_utilisateur = $_SESSION['user_id'];
    $date_upload = date('Y-m-d H:i:s');

    // Prépare la requête SQL pour insérer le fichier dans la table fichiers
    $sql = "INSERT INTO fichiers_administratifs (id_user, nom_fichier, type_fichier, taille_fichier, fichier, date_upload)
            VALUES (:id_utilisateur, :nom_fichier, :type_fichier, :taille_fichier, :contenu_fichier, :date_upload)";

    // Prépare la requête pour l'exécution
    $stmt = $pdo->prepare($sql);

    // Bind des valeurs
    $stmt->bindParam(':id_utilisateur', $id_utilisateur);
    $stmt->bindParam(':nom_fichier', $nom_fichier);
    $stmt->bindParam(':taille_fichier', $taille_fichier);
    $stmt->bindParam(':type_fichier', $type_fichier);
    $stmt->bindParam(':contenu_fichier', $contenu_fichier, PDO::PARAM_LOB);
    $stmt->bindParam(':date_upload', $date_upload);

   
    // Exécution de la requête SQL
    if ($stmt->execute()) {
        echo "Fichier uploadé avec succès !";
    } else {
        echo "Une erreur est survenue.";
    }
    }
    ?>
    </div>
    <?php
    //$page_content = ob_get_clean();

