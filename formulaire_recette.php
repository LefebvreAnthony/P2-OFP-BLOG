<?php
    require_once 'connect.php';
    $req_cat = $db->query("SELECT * FROM `categories`");
    $categories = $req_cat->fetchAll();
    ob_start();
?>
<form action="verification_form_recette.php" method="POST" enctype="multipart/form-data" id="form_recette">
    <h2>Créez votre recette :</h2>
    <div id="form_recette_1">
            <div>
                <label for="img_article">Ajoutez une image de votre dessert : </label><br>
                <input type="file" placeholder="+ Ajoutez une image" name="img_article" id="img_article" required>
            </div>
            <div>
                <div>
                    <label for="titre_article">Titre recette : </label><br>
                    <input type="text" placeholder="Tarte aux pommes" name="titre_article" id="titre_article" required>
                </div>
                <div>
                    <label for="description_article">Ajoutez une description à la recette : </label><br>
                    <input type="text" name="description_article" id="description_article" required>
                </div>
            </div>
    </div>
    <div id="form_recette_2">
        <div id="block_categorie">
            <h3>Indiquez la(les) catégorie(s) de votre recette</h3>
            <div>
            <?php
                foreach($categories as $cat) {
            ?>
            <label"><?=$cat['nom_categorie']?><input type="checkbox" name="categorie[]" value="<?=$cat['id_categorie']?>"></label>
            <?php
                }
            ?>
            </div>
        </div>
        <div>
            <label for="ingredients_article">Ajoutez les ingrédients nécessaires à la recette : </label><br>
            <input type="text" name="ingredients_article" id="ingredients_article" required>
        </div>
        <div>
            <label for="preparation_article">Ajoutez la préparation de la recette étape par étape : </label><br>
            <input type="text" name="preparation_article" id="preparation_article" required>
        </div>
        <div>
            <label for="auteur_article">Créateur de la recette : </label><br>
            <input type="text" placeholder= "Admin" name="auteur_article" id="auteur_article" required>
        </div>
        <label for="date_publication_article">Veuillez entrer la date d'aujourd'hui : </label><br>
        <input type="date" name="date_publication_article" id="date_publication_article" value="2022-01-04" min="2022-01-04" required>
    </div>
    <input type="submit" name="submit" value="Validez votre recette !">
</form>
<?php

$content = ob_get_clean();

require '../P2-OFP-BLOG/views/template/template.php';