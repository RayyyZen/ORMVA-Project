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
    else if(!password_verify($_POST['mdp'],$utilisateur['mdp'])){//Toujours mettre en premier argument le mot de passe non hache
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
        $_SESSION['dateconnexion'] = date("Y-m-j H:i:s");

        $sql = "UPDATE utilisateurs SET dateconnexion = :dateconnexion WHERE id = :id";
        $statement = $mysqldb->prepare($sql);
        $statement->execute([
            ':dateconnexion' => $_SESSION['dateconnexion'],
            'id' => $_SESSION['id'],
        ]);

        header("location: ../Pages/index.php");
    }
?>