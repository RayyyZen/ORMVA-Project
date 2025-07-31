<?php
    session_start();
    if(!isset($_POST['id']) || !isset($_POST['reponse']) || !isset($_POST['statutdemande'])){
        header("location: ../Pages/compte.php");
    }

    require_once '../PHP/db.php';
    $mysqldb = connexionDB();

    $sql = "UPDATE demandes SET reponse = :reponse, statut = :statut, datereponse = :datereponse WHERE id = :id";
    $statement = $mysqldb->prepare($sql);

    if($_POST['statutdemande'] == "valider"){
        $statut = "Valide";
    }
    else{
        $statut = "Refuse";
    }

    date_default_timezone_set('Africa/Casablanca');
    $statement->execute([
        ':reponse' => $_POST['reponse'],
        ':statut' => $statut,
        ':datereponse' => date("Y-m-j H:i:s"),
        ':id' => intval($_POST['id']),
    ]);

    header("location: ../Pages/mesdemandes.php");
?>