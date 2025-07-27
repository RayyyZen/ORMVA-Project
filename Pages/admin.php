<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Admin");
?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Admin");
    ?>

    <body>
        <?php
            afficheBarre("Admin");
        ?>

    </body>
</html>