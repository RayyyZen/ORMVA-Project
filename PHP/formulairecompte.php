<?php
    session_start();
    if(!isset($_POST['civilite']) || !isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['email']) || !isset($_POST['mdp']) || !isset($_POST['telephone']) || !isset($_POST['changementmdp'])){
        header("location: ../Pages/compte.php");
    }

    sleep(1);
    require_once '../PHP/db.php';
    $mysqldb = connexionDB();

    $sql = "SELECT * FROM utilisateurs WHERE email = :email AND id != :id";
    //Check si le mail n'est pas lié à un autre compte
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':email' => $_POST['email'],
        ':id' => $_SESSION['id'],
    ]);
    $utilisateur = $statement->fetch(PDO::FETCH_ASSOC);

    if($utilisateur !== false){
        echo "email";
        //Ca veut dire que le mail est lié à un autre compte
        exit(0);
    }

    $sql = "SELECT * FROM utilisateurs WHERE id = :id";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':id' => $_SESSION['id'],
    ]);
    $utilisateur = $statement->fetch(PDO::FETCH_ASSOC);
    $mdp = $utilisateur['mdp'];
    //Pour obtenir le mot de passe haché de l'utilisateur

    if($_POST['changementmdp'] == "oui"){
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        //Mettre le nouveau mot de passe haché si l'utilisateur l'a changé
    }

    date_default_timezone_set('Africa/Casablanca');
    //Heure locale
    $date = date("Y-m-d H:i:s");

    $sql = "UPDATE utilisateurs SET civilite = :civilite, nom = :nom, prenom = :prenom, email = :email, mdp = :mdp, telephone = :telephone, dateconnexion = :dateconnexion WHERE id = :id";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':civilite' => $_POST['civilite'],
        ':nom' => $_POST['nom'],
        ':prenom' => $_POST['prenom'],
        ':email' => $_POST['email'],
        ':mdp' => $mdp,
        ':telephone' => $_POST['telephone'],
        ':dateconnexion' => $date,
        ':id' => $_SESSION['id'],
    ]);

    $_SESSION['civilite'] = $_POST['civilite'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['telephone'] = $_POST['telephone'];
    $_SESSION['dateconnexion'] = $date;
?>