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

        <form action="../PHP/formulairedemande.php" method="POST" onsubmit="return checkTypeDemande();">
            <fieldset class="formulaire">
                <legend class="legend">Demande</legend>
                <div class="champs">
                    <label>Type</label>
                    <div class="groupe radio">
                        <input type="radio" name="type" id="intervention" class="inputformulaire inputradio" value="intervention">
                        <label for="intervention">Intervention</label>
                        <input type="radio" name="type" id="information" class="inputformulaire inputradio" value="information">
                        <label for="information">Information</label>
                        <input type="radio" name="type" id="materiel" class="inputformulaire inputradio" value="materiel">
                        <label for="materiel">Materiel</label>
                    </div>
                    <div hidden id="erreur" class="erreur">Choisissez un type de demande !</div>

                    <label for="titre">Titre</label>
                    <div class="groupe">
                        <textarea type="text" name="titre" id="titre" class="textformulaire" placeholder="Ecrivez ici le titre de la demande..." maxlength="92" required></textarea>
                    </div>

                    <label for="description">Description</label>
                    <div class="groupe">
                        <textarea type="text" name="description" id="description" class="textformulaire" placeholder="Ecrivez ici la description de la demande..." maxlength="1978" required></textarea>
                    </div>

                    <input type="submit" name="save" id="save" value="Envoyer la demande" class="submitformulaire margin">
                </div>
            </fieldset>
        </form>

        <script type="text/javascript">
            var textarea = document.getElementsByTagName("textarea");
            var i;

            for(i=0;i<textarea.length;i++){
                textarea[i].addEventListener("input", function () {
                    this.style.height = "auto"; // Réinitialiser la hauteur
                    this.style.height = this.scrollHeight + "px"; // Ajuster à la taille du contenu
                });
            }
        </script>

    </body>
</html>