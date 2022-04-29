<?php 
    include "config.php";

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
        try
        {
            $con = getDatabaseConnexion();
            $sql = "INSERT INTO client(nom, prenom,tel, mail)
                VALUES('$nom', '$prenom', '$tel', '$mail')";
            $con->exec($sql); 
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    function readUser($id)
    {
        $con = getDatabaseConnexion();
        $requete = "SELECT * FROM client WHERE id = $id";
        $stmt = $con->query($requete);
        $row = $stmt->fetchAll();
        if(!empty($row)) {
            return $row[0];
        }
    }
    function updateUser($id, $nom, $prenom,$tel,$mail){
        try
        {
            $con = getDatabaseConnexion();
            $requete = "UPDATE client SET
                    nom = '$nom',
                    prenom = '$prenom',
                    tel = '$tel',
                    mail = '$mail'
                    WHERE id = '$id' ";
            $stmt = $con->query($requete);

            
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    function deleteUser($id)
    {   
        try
        {
            $con = getDatabaseConnexion();
            $requete = "DELETE client WHERE id = '$id'";
            $stmt = $con->query($requete);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    // RDV
    function createRendezVous($debut, $fin, $statut)
    {
        try
        {
            $con = getDatabaseConnexion();
            $sql = "INSERT INTO rdv(debut, fin, statut)
                VALUES('$debut', '$fin', '$statut')";
            $con->exec($sql); 
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    function readRendezVous($id) 
    {
        $con = getDatabaseConnexion();
        $requete = "SELECT * FROM rdv WHERE id = '$id";
        $stmt = $con->query($requete);
        $row = $stmt->fetchAll();
        if(!empty($row)) {
            return $row[0];
        }
    }
    function updateRendezVous($id, $debut, $fin, $statut) 
    {
        try
        {
            $con = getDatabaseConnexion();
            $requete = "UPDATE rdv SET
                    debut = '$debut',
                    fin = '$fin',
                    statut = '$statut'
                    WHERE id = '$id' ";
            $stmt = $con->query($requete);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    function deleteRendezVous($id) 
    {
        try
        {
            $con = getDatabaseConnexion();
            $requete = "DELETE rdv WHERE id = '$id'";
            $stmt = $con->query($requete);
        }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    
?>