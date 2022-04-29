<?php

require 'config.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$debut = $_POST['debut'];
$fin = $_POST['fin'];




if(isset($_POST['submit']))
{
    $sql = "INSERT INTO rose_client (nom_client, prenom_client, telephone_client, mail_client) VALUES  (:nom_client, :prenom_client, :telephone_client, :mail_client)";
    $requete= $bdd->prepare($sql);
    $requete->execute(array(
        ':nom_client' => $nom,
        ':prenom_client' => $prenom,
        ':telephone_client' => $telephone,
        ':mail_client' => $email,
    ));
    
    $sql2 = "INSERT INTO rdv_rose (debut_rdv, fin_rdv, statut_rdv) VALUES (:debut_client, :fin_client, '0'";
    $requete= $bdd->prepare($sql2);
    $requete_>execute(array(
      ':debut_rdv' => $debut,
       ':fin_rdv' => $fin
))
 
    
}