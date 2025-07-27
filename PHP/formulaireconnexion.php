<?php
    require_once '../PHP/db.php';
    $mysqldb = connexionDB();

    $sql = "SELECT * FROM utilisateurs WHERE id = :id";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':id' => 1,
    ]);
    $utilisateurs = $statement->fetchAll();

    foreach($utilisateurs as $utilisateur){
        echo($utilisateur['id'].$utilisateur['nom'].$utilisateur['prenom']);
    }
?>