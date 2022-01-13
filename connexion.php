<?php
ob_start();
?>
<form action="verification.php" method="POST">
    <h1>Connexion</h1>
    <label for="nom_utilisateur">Nom admin</label>
    <input type="text" placehoder="Admin" name="nom_utilisateur" id="nom_utilisateur">

    <label for="mot_de_passe">Mot de passe</label>
    <input type="text" name="mot_de_passe" id="mot_de_passe">
    <input type="submit">
</form>