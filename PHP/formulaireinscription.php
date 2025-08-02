<?php
    session_start();
    if(!isset($_POST['civilite']) || !isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['email']) || !isset($_POST['mdp']) || !isset($_POST['cmdp']) || !isset($_POST['telephone'])){
        header("location: ../Pages/inscription.php");
    }
    require_once '../PHP/db.php';
    $mysqldb = connexionDB();

    $sql = "SELECT * FROM utilisateurs WHERE email = :email";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':email' => $_POST['email'],
    ]);
    $utilisateur = $statement->fetch(PDO::FETCH_ASSOC);
    //Check si le mail n'est pas lié à un autre compte

    if($utilisateur !== false){
        header("location: ../Pages/inscription.php?civilite=".$_POST['civilite']."&nom=".$_POST['nom']."&prenom=".$_POST['prenom']."&email=".$_POST['email']."&telephone=".$_POST['telephone']."&erreur=existant");
        //Les données en GET servent à préremplir les champs de la page inscription
    }
    else{
        $_SESSION['role'] = "utilisateur";
        $_SESSION['civilite'] = $_POST['civilite'];
        $_SESSION['nom'] = $_POST['nom'];
        $_SESSION['prenom'] = $_POST['prenom'];
        $_SESSION['email'] = $_POST['email'];
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $_SESSION['telephone'] = $_POST['telephone'];
        date_default_timezone_set('Africa/Casablanca');
        //Heure locale
        $_SESSION['dateinscription'] = date("Y-m-j H:i:s");
        $_SESSION['dateconnexion'] = date("Y-m-j H:i:s");

        $sql = "INSERT INTO utilisateurs (`role`, civilite, nom, prenom, email, mdp, telephone, dateinscription, dateconnexion) VALUES (:rrole, :civilite, :nom, :prenom, :email, :mdp, :telephone, :dateinscription, :dateconnexion)";
        $statement = $mysqldb->prepare($sql);
        $statement->execute([
            ':rrole' => $_SESSION['role'],
            ':civilite' => $_SESSION['civilite'],
            ':nom' => $_SESSION['nom'],
            ':prenom' => $_SESSION['prenom'],
            ':email' => $_SESSION['email'],
            ':mdp' => $mdp,
            ':telephone' => $_SESSION['telephone'],
            ':dateinscription' => $_SESSION['dateinscription'],
            ':dateconnexion' => $_SESSION['dateconnexion'],
        ]);

        $_SESSION['id'] = $mysqldb->lastInsertId();
        //Pour avoir directement le dernier id sans COUNT(*) tous les utilisateurs

        header("location: ../Pages/index.php");
    }
?>