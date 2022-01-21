<?php
    require_once 'connect.php';
    $id_cat = $_GET['id_categorie'];
    $req = $db->query("SELECT article_categorie.id_article, article_categorie.id_categorie, article_categorie.id_categorie_article, `titre_article`, `img_article`, `description_article`, `auteur_article`, `date_publication_article` FROM `article_categorie`
        INNER JOIN `articles` ON article_categorie.id_article = articles.id_article
        INNER JOIN `categories` ON article_categorie.id_categorie = categories.id_categorie
        WHERE article_categorie.id_categorie = $id_cat");
    ob_start();
?>
<section id="all_articles">
<?php
    foreach($req as $article) {
?>
        <article class="bg_grey">
            <h2><?=$article['titre_article'] ?></h2>
            <figure>
                <img class="img_articles" src="./views/assets/img/img_recette/<?= $article['img_article']?>" alt="photo article">
            </figure>
            <div class="info_article">
                <p class="auteur_article">Créer par <?=$article['auteur_article']?></p>
                <p class="date_publier">le <?= $article['date_publication_article']?></p>
                <p class="description_articles"><?= $article['description_article'] ?></p>
            </div>
            <a class="lien_article" href="article.php?id=<?=$article['id_article']?>">Lire la recette</a>
        </article>
<?php
    }
?>
</section>
<?php
    
    $content = ob_get_clean();
    require '../P2-OFP-BLOG/views/template/template.php';
