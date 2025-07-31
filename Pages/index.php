<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Acceuil");
?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Acceuil");
    ?>

    <body>
        <?php
            afficheBarre("Acceuil");
        ?>

        <div class="paragraphe">
            <div class="titreparagraphe">A savoir !</div>
            Cette application web a pour but de pemettre aux employés de l'Office Régional de Mise en Valeur Agricole du Souss Massa de soumettre des demandes
            internes (Demande de matériel, intervention technique, information...) et de permettre à des responsables de suivre ces demandes ainsi que les valider ou les refuser

        </div>
    </body>
</html>