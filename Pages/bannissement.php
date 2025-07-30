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

        <div class="paragraphe">
            <div class="titreparagraphe">Attention !</div>
            Ce compte est banni !!! <br><br> Veillez contacter votre responsable pour plus d'informations.
        </div>
    </body>
</html>