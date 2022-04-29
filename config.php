<?php
// Connexino bdd
try {
    $bdd = new PDO('mysql:host=localhost;dbname=rose', 'root', '');
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
} 


?>