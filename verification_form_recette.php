<?php
    require_once 'connect.php';
    $req_form = $_POST;
    if(isset($req_form['submit'])) {
        $titre_article = $req_form['titre_article'];
        $description_article = $req_form['description_article'];
        $ingredients_article = $req_form['ingredients_article'];
        $preparation_article = $req_form['preparation_article'];
        $auteur_article = $req_form['auteur_article'];
        $date_publication_article = $req_form['date_publication_article'];


        $path = "./views/assets/img/img_recette/";
        $arrayType = ["jpg" => 'image/jpg', "jpeg" => 'image/jpeg', "png" => 'image/png'];
        $name_img = basename($_FILES['img_article']['name']);
        
        if(in_array($_FILES['img_article']['type'], $arrayType)) {
            
            move_uploaded_file($_FILES['img_article']['name'], $path.$name_img);

            /**** REQUETE PREPARER *****/
            $req_article = $db->prepare("INSERT INTO `articles` (`titre_article`, `img_article`, `description_article`, `ingredients_article`, `preparation_article`, `auteur_article`, `date_publication_article`)
            VALUES (:titre_article, :name_img, :description_article, :ingredients_article, :preparation_article, :auteur_article, :date_publication_article)");
            $req_article->bindParam('titre_article', $titre_article, PDO::PARAM_STR);
            $req_article->bindParam('name_img', $name_img, PDO::PARAM_STR);
            $req_article->bindParam('description_article', $description_article, PDO::PARAM_STR);
            $req_article->bindParam('ingredients_article', $ingredients_article, PDO::PARAM_STR);
            $req_article->bindParam('preparation_article', $preparation_article, PDO::PARAM_STR);
            $req_article->bindParam('auteur_article', $auteur_article, PDO::PARAM_STR);
            $req_article->bindParam('date_publication_article', $date_publication_article, PDO::PARAM_STR);
            $req_article->execute();
            
            $last_id = $db->lastInsertId();
            $categorie = $req_form['categorie'];
            foreach($categorie as $cat) {
                $req_cat = $db->prepare("INSERT INTO `article_categorie` (`id_categorie`, `id_article`)
                VALUES (:idcat, :idart)");
                $req_cat->bindParam('idcat', $cat, PDO::PARAM_INT);
                $req_cat->bindParam('idart', $last_id, PDO::PARAM_INT);
                $req_cat->execute();
            
            }
        header('Location: ./index.php');
        }
        
    } else {
        echo "Veuillez vérifier votre formulaire de recette";
    }