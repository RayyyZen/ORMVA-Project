<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Inscription");
?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Inscription");
    ?>

    <body>
        <?php
            afficheBarre("Inscription");
        ?>

        <form action="../PHP/formulaireinscription.php" method="POST" onsubmit="return checkmdp();">
            <fieldset class="formulaire">
                <legend class="legend">Inscription</legend>
                <div class="champs">
                    <label for="civilite">Civilite</label>
                    <div class="groupe">
                        <?php
                            if(isset($_GET['civilite'])){
                                echo '<select name="civilite" id="civilite" class="inputformulaire" data-extra="'.$_GET['civilite'].'">';
                            }
                            else{
                                echo '<select name="civilite" id="civilite" class="inputformulaire">';
                            }
                        ?>
                            <option value="monsieur">Monsieur</option>
                            <option value="madame">Madame</option>
                        </select>
                    </div>

                    <label for="nom">Nom</label>
                    <div class="groupe">
                    <?php
                        if(isset($_GET['nom']) && isset($_GET['erreur'])){
                            echo '<input type="text" name="nom" id="nom" class="inputformulaire" placeholder="Ray" pattern="^[A-Za-z]+$" maxlength="29" value="'.$_GET['nom'].'" required>';
                        }
                        else{
                            echo '<input type="text" name="nom" id="nom" class="inputformulaire" placeholder="Ray" pattern="^[A-Za-z]+$" maxlength="29" required>';
                        }
                    ?>
                    </div>

                    <label for="prenom">Prenom</label>
                    <div class="groupe">
                    <?php
                        if(isset($_GET['prenom']) && isset($_GET['erreur'])){
                            echo '<input type="text" name="prenom" id="prenom" class="inputformulaire" placeholder="Zen" pattern="^[A-Za-z]+$" maxlength="29" value="'.$_GET['nom'].'" required>';
                        }
                        else{
                            echo '<input type="text" name="prenom" id="prenom" class="inputformulaire" placeholder="Zen" pattern="^[A-Za-z]+$" maxlength="29" required>';
                        }
                    ?>
                    </div>

                    <label for="email">Adresse mail</label>
                    <div class="groupe">
                    <?php
                        if(isset($_GET['email']) && isset($_GET['erreur'])){
                            echo '<input type="email" name="email" id="email" class="inputformulaire inputemail" placeholder="rayzen@gmail.com" pattern="^[A-Za-z0-9.@]+$" maxlength="60" value="'.$_GET['email'].'" required>';
                        }
                        else{
                            echo '<input type="email" name="email" id="email" class="inputformulaire inputemail" placeholder="rayzen@gmail.com" pattern="^[A-Za-z0-9.@]+$" maxlength="60" required>';
                        }
                    ?>
                    </div>
                    <?php
                        if(isset($_GET['email']) && isset($_GET['erreur']) && $_GET['erreur'] == "existant"){
                            echo '<div class="erreur">Cet email est lié à un autre compte !</div>';
                        }
                    ?>

                    <label for="mdp">Mot de passe</label>
                    <div class="groupe">
                        <input type="password" name="mdp" id="mdp" class="inputformulaire" placeholder="Mot de passe" required>
                        <button hidden type="button" onclick="opmdp('cacher','mdp','buttoncache','buttonmontre');" class="iconeformulaire" id="buttoncache"><i class="fa-solid fa-face-laugh"></i></button>
                        <button type="button" onclick="opmdp('montrer','mdp','buttoncache','buttonmontre');" class="iconeformulaire" id="buttonmontre"><i class="fa-solid fa-face-laugh-squint"></i></button>
                    </div>

                    <label for="cmdp">Confirmer le mot de passe</label>
                    <div class="groupe">
                        <input type="password" name="cmdp" id="cmdp" class="inputformulaire" placeholder="Mot de passe" required>
                        <button hidden type="button" onclick="opmdp('cacher','cmdp','cbuttoncache','cbuttonmontre');" class="iconeformulaire" id="cbuttoncache"><i class="fa-solid fa-face-laugh"></i></button>
                        <button type="button" onclick="opmdp('montrer','cmdp','cbuttoncache','cbuttonmontre');" class="iconeformulaire" id="cbuttonmontre"><i class="fa-solid fa-face-laugh-squint"></i></button>
                    </div>
                    <div hidden id="erreur" class="erreur">Les mots de passes ne sont pas identiques !</div>

                    <label for="telephone">Telephone</label>
                    <div class="groupe">
                    <?php
                        if(isset($_GET['telephone']) && isset($_GET['erreur'])){
                            echo '<input type="text" name="telephone" id="telephone" class="inputformulaire" placeholder="0611111111" pattern="^[0-9]+$" minlength="10" maxlength="10" value="'.$_GET['telephone'].'" required>';
                        }
                        else{
                            echo '<input type="text" name="telephone" id="telephone" class="inputformulaire" placeholder="0611111111" pattern="^[0-9]+$" minlength="10" maxlength="10" required>';
                        }
                    ?>
                    </div>

                    <input type="submit" name="save" id="save" value="S'inscrire" class="submitformulaire">
                    <a href="../Pages/connexion.php" class="lienformulaire">Vous avez déjà un compte ? Connectez-vous !</a>
                </div>
            </fieldset>
        </form>
    </body>

    <script type="text/javascript">
        window.addEventListener("load",remplissageCivilite);
    </script>
</html>