<?php

require_once __DIR__ . '/../../init.php';

$page_title = "soins file";
$head_metas = "<link rel=stylesheet href=assets/CSS/soins_file.css>";


ob_start();

?>

<div class="bloc-form">

    <form>
        <h1>Contactez-nous</h1>
        <div class="separation"></div>
        <div class="corps-formulaire">
            <div class="gauche">
                <div>
                    <a href="/?page=admin_choose_add_document">Ajouter un document</a>
                </div>
                <div class="groupe">
                    <label>Votre Nom</label>
                    <input type="text" autocomplete="off" />
                    <i class="fas fa-user"></i>
                </div>
                <div class="groupe">
                    <label>Votre Email</label>
                    <input type="mail" autocomplete="off" />
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="groupe">
                    <label>Date</label>
                    <input type="date" autocomplete="off" />
                    <i class="fas fa-mobile"></i>
                </div>
            </div>

            <div class="droite">
                <div class="groupe">
                    <label>Description</label>
                    <textarea placeholder="Saisissez ici..."></textarea>
                </div>
            </div>
        </div>

        <div class="pied-formulaire" align="center">
            <button>Envoyer le message</button>
        </div>
    </form>
</div>


<?php

$page_content = ob_get_clean();

?>