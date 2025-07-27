<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Demande");
?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Demande");
    ?>

    <body>
        <?php
            afficheBarre("Demande");
        ?>

    </body>
</html>