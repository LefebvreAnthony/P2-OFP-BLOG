<?php
require_once 'connect.php';
$id_article = $_GET['id'];
$req = $db->query("SELECT * FROM `articles` WHERE `id_article` = $id_article");
$article =$req->fetch(PDO::FETCH_ASSOC);
ob_start();
?>
    <article id="article_unique">
        <h2><?=$article['titre_article'] ?></h2>
        <div id="top_article" class="displayFlex">
            <figure>
                <img src="./views/assets/img/img_recette/<?= $article['img_article']?>" alt="image de la recette <?=$article['titre_article']?>">
            </figure>
            <div id="desc_ing">
                <h3>Description</h3>
                <p><?= $article['description_article'] ?></p>
                <h3>Ingrédients</h3>
                <p><?= $article['ingredients_article']?></p>
            </div>
        </div>
        <div id="prep_unique">
            <h3>Préparation</h3>
            <p><?= $article['preparation_article']?></p>
        </div>
    </article>
<?php

$content = ob_get_clean();

require '../P2-OFP-BLOG/views/template/template.php';