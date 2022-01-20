<?php
require_once 'connect.php';
$req = $db->query("SELECT * FROM `articles`", PDO::FETCH_ASSOC);
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