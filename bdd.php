<?php
//info de connexion à notre bdd:
try{//
    $db = new PDO('mysql:host=localhost;dbname=upload_file', 'root', '');
}
//Ajout d'une exception si ça ne marche pas
catch(PDOException $e){//On catche "erreur" si ça ne marche pas
    die('Erreur sur la base de données: '.$e->getMessage());//on affiche le message d'erreur par la suite
}