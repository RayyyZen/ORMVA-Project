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
            $nbrlignes = 16;

            afficheBarre("Admin");
            echo '<div class="groupe2">';
            echo '<div class="margin">';
            afficheNumeros($nbrlignes,"utilisateurs");
            echo '</div>';
            echo '<div hidden id="erreur" class="erreur2"><i class="fa-solid fa-triangle-exclamation"></i> Cet email est lie a un autre compte !</div>';
            echo '</div>';
            afficheAdmin();
        ?>
        <input hidden disabled id="pageactuelle" type="text" value="1">
    </body>

    <script type="text/javascript">
        window.addEventListener("load", select);
        <?php
            echo 'window.addEventListener("load", () => affichepages('.$nbrlignes.',1));';
        ?>
    </script>
</html>