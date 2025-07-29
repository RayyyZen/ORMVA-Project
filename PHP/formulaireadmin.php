<?php
    session_start();
    if(!isset($_POST['id']) || !isset($_POST['role']) || !isset($_POST['civilite']) || !isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['email']) || !isset($_POST['telephone'])){
        header("location: ../Pages/admin.php");
    }

    sleep(1);
    require_once '../PHP/db.php';
    $mysqldb = connexionDB();

    $sql = "SELECT * FROM utilisateurs WHERE email = :email AND id != :id";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':email' => $_POST['email'],
        ':id' => $_POST['id'],
    ]);
    $utilisateur = $statement->fetch(PDO::FETCH_ASSOC);

    if($utilisateur !== false){
        echo "email";
        exit(0);
    }

    $sql = "SELECT * FROM utilisateurs WHERE id = :id";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':id' => $_POST['id'],
    ]);
    $utilisateur = $statement->fetch(PDO::FETCH_ASSOC);
    
    $sql = "UPDATE utilisateurs SET `role` = :rrole, civilite = :civilite, nom = :nom, prenom = :prenom, email = :email, telephone = :telephone WHERE id = :id";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':rrole' => $_POST['role'],
        ':civilite' => $_POST['civilite'],
        ':nom' => $_POST['nom'],
        ':prenom' => $_POST['prenom'],
        ':email' => $_POST['email'],
        ':telephone' => $_POST['telephone'],
        ':id' => $_POST['id'],
    ]);
?>