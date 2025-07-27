<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Bannissement");
?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Bannissement");
    ?>

    <body>
        <?php
            afficheBarre("Bannissement");
        ?>

    </body>
</html>