<?php
    session_start();
    if(!isset($_POST['email']) || !isset($_POST['mdp'])){
        header("location: ../Pages/connexion.php");
    }
    require_once '../PHP/db.php';
    $mysqldb = connexionDB();

    $sql = "SELECT * FROM utilisateurs WHERE email = :email";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':email' => $_POST['email'],
    ]);
    $utilisateur = $statement->fetch(PDO::FETCH_ASSOC);

    if($utilisateur === false){
        header("location: ../Pages/connexion.php?email=".$_POST['email']."&erreur=inexistant");
    }
    else if($utilisateur['mdp'] != $_POST['mdp']){
        header("location: ../Pages/connexion.php?email=".$_POST['email']."&erreur=mdp");
    }
    else{
        $_SESSION['id'] = $utilisateur['id'];
        $_SESSION['role'] = $utilisateur['role'];
        $_SESSION['civilite'] = $utilisateur['civilite'];
        $_SESSION['nom'] = $utilisateur['nom'];
        $_SESSION['prenom'] = $utilisateur['prenom'];
        $_SESSION['email'] = $utilisateur['email'];
        $_SESSION['mdp'] = $utilisateur['mdp'];
        $_SESSION['telephone'] = $utilisateur['telephone'];
        $_SESSION['dateinscription'] = $utilisateur['dateinscription'];
        $_SESSION['dateconnexion'] = $utilisateur['dateconnexion'];
        
        header("location: ../Pages/index.php");
    }
?>