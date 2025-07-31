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

        function filtrer(){
            var select = document.getElementsByTagName("select");
            var lignes = document.getElementsByTagName("tr");
            var i;
            var chaine;
            for(i=1;i<lignes.length;i++){
                chaine = lignes[i].dataset.extra;
                if((select[0].value == "vide" || chaine.split("_")[0] == select[0].value) && (select[1].value == "vide" || chaine.split("_")[1] == select[1].value)){
                    lignes[i].hidden = false;
                }
                else{
                    lignes[i].hidden = true;
                }
            }
        }

        var select = document.getElementsByTagName("select");
        var i;
        for(i=0;i<select.length;i++){
            select[i].addEventListener("input", filtrer);
        }
    </script>
</html>