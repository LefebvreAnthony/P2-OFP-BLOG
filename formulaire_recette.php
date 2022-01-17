<?php
    require_once 'connect.php';
    ob_start();
?>
<form action="verification_article" method="POST">
    <h1>Créez votre recette :</h1>
    <label for="titre_article">Titre recette : </label>
    <input type="text" placeholder="Tarte aux pommes" name="titre_article" id="titre_article">
    <label for="img_article">Ajoutez une image de votre dessert</label>
    <input type="file" placeholder="+ Ajoutez une image" name="img_article" id="img_article">
    <label for="description_article">Ajoutez une description à la recette</label>
    <input type="text" name="description_article" id="description_article">
    <label for="ingredients_article">Ajoutez les ingrédients nécessaires à la recette : </label>
    <input type="text" name="ingredients_article" id="ingredients_article">
    <label for="preparation_article">Ajoutez la préparation de la recette étape par étape</label>
    <input type="text" name="preparation_article" id="preparation_article">
    <input type="submit" value="Validez votre recette !">
</form>
<?php

$content = ob_get_clean();

require '../P2-OFP-BLOG/views/template/template.php';