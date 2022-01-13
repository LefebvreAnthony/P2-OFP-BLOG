<?php
require_once 'connect.php';
$req = $db->query("SELECT * FROM `articles`", PDO::FETCH_ASSOC);
ob_start();
foreach($req as $article) {
?>
    <article>
        <h2><?=$article['titre_article'] ?></h2>
        <img src="./views/assets/img/img_recette/<?= $article['img_article']?>" alt="photo article">
        <h3>Descrition</h3>
        <p><?= $article['description_article'] ?></p>
        <h3>Ingrédients</h3>
        <p><?= $article['ingredients_article']?></p>
        <h3>Préparation</h3>
        <p><?= $article['preparation_article']?></p>
<?php
}
$content = ob_get_clean();

require '../P2-OFP-BLOG/views/template/template.php';