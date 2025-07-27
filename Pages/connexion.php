<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Connexion");
?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Connexion");
    ?>

    <body>
        <?php
            afficheBarre("Connexion");
        ?>

        <form action="../PHP/formulaireconnexion.php" method="POST">
            <fieldset class="formulaire">
                <legend class="legend">Connexion</legend>
                <div class="champs">
                    <label for="email">Adresse mail</label>
                    <div class="groupe">
                    <?php
                        if(isset($_GET['email']) && isset($_GET['erreur'])){
                            echo '<input type="email" name="email" id="email" class="inputformulaire inputemail" placeholder="rayzen@gmail.com" pattern="^[A-Za-z0-9@.]+$" maxlength="60" value="'.$_GET['email'].'" required>';
                        }
                        else{
                            echo '<input type="email" name="email" id="email" class="inputformulaire inputemail" placeholder="rayzen@gmail.com" pattern="^[A-Za-z0-9@.]+$" maxlength="60" required>';
                        }
                    ?>
                    </div>
                    <?php
                        if(isset($_GET['email']) && isset($_GET['erreur']) && $_GET['erreur'] == "inexistant"){
                            echo '<div class="erreur">Compte inexistant !</div>';
                        }
                        else if(isset($_GET['email']) && isset($_GET['erreur']) && $_GET['erreur'] == "mdp"){
                            echo '<div class="erreur">Mot de passe incorrect !</div>';
                        }
                    ?>
                    <label for="mdp">Mot de passe</label>
                    <div class="groupe">
                        <input type="password" name="mdp" id="mdp" class="inputformulaire" placeholder="Mot de passe" required>
                        <button hidden type="button" onclick="opmdp('cacher','mdp','buttoncache','buttonmontre');" class="iconeformulaire" id="buttoncache"><i class="fa-solid fa-face-laugh"></i></button>
                        <button type="button" onclick="opmdp('montrer','mdp','buttoncache','buttonmontre');" class="iconeformulaire" id="buttonmontre"><i class="fa-solid fa-face-laugh-squint"></i></button>
                    </div>
                    <input type="submit" name="save" id="save" value="Se connecter" class="submitformulaire">
                    <a href="../Pages/inscription.php" class="lienformulaire">Pas de compte ? Inscrivez-vous !</a>
                </div>
            </fieldset>
        </form>
    </body>
</html>