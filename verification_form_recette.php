<?php
    require_once 'connect.php';
    $req_form = $_POST;
    if(isset($req_form['titre_article'], $req_form['img_article'], $req_form['description_article'], $req_form['ingredients_article'], $req_form['preparation_article'], $req_form['auteur_article'], $req_form['date_publication_article'])) {
        $titre_article = $req_form['titre_article'];
        $img_article = $req_form['img_article'];
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

            $db->query("INSERT INTO `articles` (`titre_article`, `img_article`, `description_article`, `ingredients_article`, `preparation_article`, `auteur_article`, `date_publication_article`) VALUES 
                        ('$titre_article', '$name_img', '$description_article', '$ingredients_article', '$preparation_article', '$auteur_article', '$date_publication_article')");
        } else {
            echo "Le format d'image n'est pas bon";
        }
        
    } else {
        echo "Veuillez vérifier votre formulaire de recette";
    }