<?php
    require_once 'connect.php';
    $req = $db->query('SELECT * FROM `categories`', PDO::FETCH_ASSOC);
    ob_start();
?>
    <ul id="list_categories">
<?php
    foreach($req as $categories) {
?>
        <li>
            <a href="../P2-OFP-BLOG/articles_categorie.php?id_categorie=<?=$categories['id_categorie']?>" style="background: center/cover no-repeat url('./views/assets/img/img_categorie/<?=$categories['img_categorie']?>')"><?=$categories['nom_categorie']?></a>
        </li>
<?php

    }
?>
    </ul>
<?php
$content = ob_get_clean();
   require '../P2-OFP-BLOG/views/template/template.php';