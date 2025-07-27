<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Inscription");
?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Inscription");
    ?>

    <body>
        <?php
            afficheBarre("Inscription");
        ?>

    </body>
</html>