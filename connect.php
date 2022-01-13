<?php
    try{
        $db = new PDO('mysql:host=localhost;dbname=blog_dessert', 'root');
        $db->query('SET NAMES utf8');
    } catch(Exception $e) {
        echo 'erreur : '.$e->get_message();
    }