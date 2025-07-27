<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Compte");
?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Compte");
    ?>

    <body>
        <?php
            afficheBarre("Compte");
        ?>

    </body>
</html>