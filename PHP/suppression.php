<?php
    session_start();

    require_once '../PHP/db.php';
    $mysqldb = connexionDB();

    $sql = "DELETE FROM utilisateurs WHERE id = :id";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':id' => $_SESSION['id'],
    ]);

    $_SESSION = [];

    header("location: ../Pages/index.php");
?>