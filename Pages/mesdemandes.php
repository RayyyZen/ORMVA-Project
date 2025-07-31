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
            $nbrlignes = 16;
        
            afficheBarre("Mesdemandes");
            echo '<div class="groupe2">';
            echo '<div class="margin">';
            afficheNumeros($nbrlignes,"demandes");
            echo '</div>';
            echo '</div>';
            afficheDemandes();
        ?>

        <input hidden disabled id="pageactuelle" type="text" value="1">
    </body>

    <script type="text/javascript">
        <?php
            echo 'window.addEventListener("load", () => affichepages('.$nbrlignes.',1));';
        ?>
    </script>
</html>