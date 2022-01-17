<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../P2-OFP-BLOG/views/assets/css/style.css">
    <title>The Sugar Food</title>
</head>
<body>
    <header>
        <div id="headerNav" class="displayFlex">
            <a href="index.php">
                <figure>
                    <img src="./views/assets/img/logo.svg" alt="Logo Sugar Food">
                </figure>
            </a>
            <nav class="displayFlex">
                <ul class="displayFlex">
                    <li><a href="../P2-OFP-BLOG/index.php">Acceuil</a></li>
                    <li><a href="../P2-OFP-BLOG/articles.php">Tout les articles</a></li>
                    <li><a href="../P2-OFP-BLOG/formulaire_recette.php">Ajoutez une recette</a></li>
                    <li><a href="../P2-OFP-BLOG/categories.php">Catégories</a></li>
                </ul>
            </nav>
        </div>
        <div id="headerTitle">
            <h1>Acceuil</h1>
        </div>
    </header>

    <main>
        <?= $content ?>
    </main>

    <footer>
        <div id="partenaires">
            <h3>Nos partenaires</h3>
            <ul>
                <li>Homines enim eruditos et sobrios ut infaustos et</li>
                <li>Et licet quocumque oculos flexeris feminas adfatim</li>
                <li>Iis igitur est difficilius satis facere, qui se</li>
                <li>Montius nos tumore inusitato quodam et novo ut</li>
                <li>Hac ex causa conlaticia stipe Valerius humatur</li>
            </ul>
        </div>
        <div id="histoire">
            <h3>En savoir + sur nous</h3>
            <p>Quid enim tam absurdum quam delectari multis inanimis rebus, ut honore, ut gloria, ut aedificio, ut vestitu cultuque corporis, animante virtute praedito, eo qui vel amare vel, ut ita dicam, redamare possit, non admodum delectari? Nihil est enim remuneratione benevolentiae, nihil vicissitudine studiorum officiorumque iucundius.</p>
        </div>
        <div id="follow">
            <h3>Nous suivre</h3>
            <ul>
                <li><a href="#"><img src="./views/assets/img/socialMedia/YouTube.png" alt=""></a></li>
                <li><a href="#"><img src="./views/assets/img/socialMedia/Instagram.png" alt=""></a></li>
                <li><a href="#"><img src="./views/assets/img/socialMedia/Twitter.png" alt=""></a></li>
                <li><a href="#"><img src="./views/assets/img/socialMedia/Facebook.png" alt=""></a></li>
            </ul>
        </div>
    </footer>
    
</body>
</html>