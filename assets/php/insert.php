<?php

require 'config.php';

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];



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
    header ("location: ../../form.php?message=succes");
}else{header ("location: ../../form.php?message=error");}

?>