<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Mesdemandes");
?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Mesdemandes");
    ?>

    <body>
        <?php
            afficheBarre("Mesdemandes");
        ?>

    </body>
</html>