<?php
    session_start();
    if(!isset($_POST['id']) || !isset($_POST['reponse']) || !isset($_POST['statutdemande'])){
        header("location: ../Pages/compte.php");
    }

    require_once '../PHP/db.php';
    $mysqldb = connexionDB();

    $sql = "INSERT INTO demandes (reponse, statut) VALUES (:reponse, :statut) WHERE id = :id";
    $statement = $mysqldb->prepare($sql);

    if($_POST['statutdemande'] == "valider"){
        $statut = "Valide";
    }
    else{
        $statut = "Refuse";
    }

    $statement->execute([
        ':reponse' => $_POST['reponse'],
        ':statut' => $statut,
        ':id' => $_POST['id'],
    ]);

    header("location: ../Pages/mesdemandes.php");
?>