<?php
    session_start();
    if(!isset($_POST['type']) || !isset($_POST['titre']) || !isset($_POST['description'])){
        header("location: ../Pages/demande.php");
    }

    require_once '../PHP/db.php';
    $mysqldb = connexionDB();

    $sql = "INSERT INTO demandes (id_utilisateur, titre, `description`, reponse, datedemande, `type`, statut) VALUES (:id_utilisateur, :titre, :ddescription, :reponse, :datedemande, :ttype, :statut)";
    $statement = $mysqldb->prepare($sql);
    date_default_timezone_set('Africa/Casablanca');
    //Heure locale
    $statement->execute([
        ':id_utilisateur' => $_SESSION['id'],
        ':titre' => $_POST['titre'],
        ':ddescription' => $_POST['description'],
        ':reponse' => "",
        ':datedemande' => date("Y-m-j H:i:s"),
        ':ttype' => $_POST['type'],
        ':statut' => "En attente",
    ]);

    header("location: ../Pages/mesdemandes.php");
?>