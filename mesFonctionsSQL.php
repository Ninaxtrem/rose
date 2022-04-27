<?php 
    

    function getDatabaseConnexion() 
    {
        try {
            $user = 'root';
            $pass = '';
            $bdd = new PDO('mysql:host=localhost;dbname=rose', $user, $pass);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $bdd;
            
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        
    }
    function getAllRendezVous() 
    {
        $con = getDatabaseConnexion();
        $requete = 'SELECT * FROM rdv';
        $rows = $con->query($requete);
        return $rows;
    }
    // Utilisateurs
    function createUser($nom, $prenom,$tel,$mail){

    }
    function readUser($id)
    {
        $con = getDatabaseConnexion();
        $requete = "SELECT * FROM client WHERE id = '$id";
        $rows = $con->query($requete);
        $rows = $stmt->fetchAll();
    }
    function updateUser($id, $nom, $prenom,$tel,$mail){

    }
    function deleteUser($id)
    {

    }
    // RDV
    function createRendezVous($debut, $fin, $statut)
    {

    }
    function readRendezVous($id) 
    {
        
    }
    function updateRendezVous($id, $debut, $fin, $statut) 
    {
        
    }
    function deleteRendezVous($id) 
    {
        
    }
?>