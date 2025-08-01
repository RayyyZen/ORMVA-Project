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
            echo 'window.addEventListener("load", () => filtrer('.$nbrlignes.',1));';
        ?>

        var select = document.getElementsByTagName("select");
        var i;
        for(i=0;i<select.length;i++){
            <?php
                echo 'select[i].addEventListener("input", () => filtrer('.$nbrlignes.',1));';
            ?>
        }
    </script>
</html>