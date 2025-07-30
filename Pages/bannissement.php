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
            <div class="titreparagraphe dangertext">Attention !</div>
            <br><div class="danger">Ce compte est banni !!!</div> <br><br> <div class="dangertext">Veillez contacter votre responsable pour plus d'informations.</div>
        </div>
    </body>
</html>