<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Compte");
?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Compte");
    ?>

    <body>
        <?php
            afficheBarre("Compte");
        ?>

        <form action="../PHP/formulairecompte.php" method="POST" onsubmit="return checkmdp();">
            <fieldset class="formulaire">
                <legend class="legend">Informations</legend>
                <div class="champs">
                    <label for="civilite">Civilite</label>
                    <div class="groupe">
                        <select name="civilite" id="civilite" class="inputformulaire" data-extra="<?php echo($_SESSION['civilite']) ?>" disabled>
                            <option value="monsieur">Monsieur</option>
                            <option value="madame">Madame</option>
                        </select>
                        <button hidden type="button" id="sauvegardercivilite" onclick="sauvegarder('civilite','sauvegardercivilite','annulercivilite','modifiercivilite','chargementcivilite');"><i class="fa-solid fa-floppy-disk iconecompte"></i></button>
                        <button hidden type="button" id="annulercivilite" onclick="annuler('civilite','sauvegardercivilite','annulercivilite','modifiercivilite','chargementcivilite');"><i class="fa-solid fa-xmark iconecompte"></i></button>
                        <button type="button" id="modifiercivilite" onclick="modifier('civilite','sauvegardercivilite','annulercivilite','modifiercivilite','chargementcivilite')"><i class="fa-solid fa-pencil iconecompte"></i></button>
                        <button hidden type="button" id="chargementcivilite" disabled><i class="fas fa-spinner fa-spin active iconecompte"></i></button>
                    </div>

                    <label for="nom">Nom</label>
                    <div class="groupe">
                        <input type="text" name="nom" id="nom" class="inputformulaire" placeholder="Ray" pattern="^[A-Za-z]+$" maxlength="29" value="<?php echo($_SESSION['nom']) ?>" data-extra="<?php echo($_SESSION['nom']) ?>" required disabled>
                        <button hidden type="button" id="sauvegardernom" onclick="sauvegarder('nom','sauvegardernom','annulernom','modifiernom','chargementnom');"><i class="fa-solid fa-floppy-disk iconecompte"></i></button>
                        <button hidden type="button" id="annulernom" onclick="annuler('nom','sauvegardernom','annulernom','modifiernom','chargementnom');"><i class="fa-solid fa-xmark iconecompte"></i></button>
                        <button type="button" id="modifiernom" onclick="modifier('nom','sauvegardernom','annulernom','modifiernom','chargementnom');"><i class="fa-solid fa-pencil iconecompte"></i></button>
                        <button hidden type="button" id="chargementnom" disabled><i class="fas fa-spinner fa-spin active iconecompte"></i></button>
                    </div>

                    <label for="prenom">Prenom</label>
                    <div class="groupe">
                        <input type="text" name="prenom" id="prenom" class="inputformulaire" placeholder="Zen" pattern="^[A-Za-z]+$" maxlength="29" value="<?php echo($_SESSION['prenom']) ?>" data-extra="<?php echo($_SESSION['prenom']) ?>" required disabled>
                        <button hidden type="button" id="sauvegarderprenom" onclick="sauvegarder('prenom','sauvegarderprenom','annulerprenom','modifierprenom','chargementprenom');"><i class="fa-solid fa-floppy-disk iconecompte"></i></button>
                        <button hidden type="button" id="annulerprenom" onclick="annuler('prenom','sauvegarderprenom','annulerprenom','modifierprenom','chargementprenom');"><i class="fa-solid fa-xmark iconecompte"></i></button>
                        <button type="button" id="modifierprenom" onclick="modifier('prenom','sauvegarderprenom','annulerprenom','modifierprenom','chargementprenom');"><i class="fa-solid fa-pencil iconecompte"></i></button>
                        <button hidden type="button" id="chargementprenom" disabled><i class="fas fa-spinner fa-spin active iconecompte"></i></button>
                    </div>

                    <label for="email">Adresse mail</label>
                    <div class="groupe">
                        <input type="email" name="email" id="email" class="inputformulaire inputemail" placeholder="rayzen@gmail.com" pattern="^[A-Za-z0-9.@]+$" maxlength="60" value="<?php echo($_SESSION['email']) ?>" data-extra="<?php echo($_SESSION['email']) ?>" required disabled>
                        <button hidden type="button" id="sauvegarderemail" onclick="sauvegarder('email','sauvegarderemail','annuleremail','modifieremail','chargementemail');"><i class="fa-solid fa-floppy-disk iconecompte"></i></button>
                        <button hidden type="button" id="annuleremail" onclick="annuler('email','sauvegarderemail','annuleremail','modifieremail','chargementemail');"><i class="fa-solid fa-xmark iconecompte"></i></button>
                        <button type="button" id="modifieremail" onclick="modifier('email','sauvegarderemail','annuleremail','modifieremail','chargementemail');"><i class="fa-solid fa-pencil iconecompte"></i></button>
                        <button hidden type="button" id="chargementemail" disabled><i class="fas fa-spinner fa-spin active iconecompte"></i></button>
                    </div>
                    <div hidden id="erreur" class="erreur">Cet email est lié à un autre compte !</div>

                    <label for="mdp">Mot de passe</label>
                    <div class="groupe">
                        <input type="password" name="mdp" id="mdp" class="inputformulaire" placeholder="Mot de passe" value="0000000000" data-extra="0000000000" required disabled>
                        <button hidden type="button" onclick="opmdp('cacher','mdp','buttoncache','buttonmontre');" class="iconeformulaire" id="buttoncache"><i class="fa-solid fa-face-laugh"></i></button>
                        <button hidden type="button" onclick="opmdp('montrer','mdp','buttoncache','buttonmontre');" class="iconeformulaire" id="buttonmontre"><i class="fa-solid fa-face-laugh-squint"></i></button>
                        <button hidden type="button" id="sauvegardermdp" onclick="sauvegarder('mdp','sauvegardermdp','annulermdp','modifiermdp','chargementmdp');"><i class="fa-solid fa-floppy-disk iconecompte"></i></button>
                        <button hidden type="button" id="annulermdp" onclick="annuler('mdp','sauvegardermdp','annulermdp','modifiermdp','chargementmdp');"><i class="fa-solid fa-xmark iconecompte"></i></button>
                        <button type="button" id="modifiermdp" onclick="modifier('mdp','sauvegardermdp','annulermdp','modifiermdp','chargementmdp');"><i class="fa-solid fa-pencil iconecompte"></i></button>
                        <button hidden type="button" id="chargementmdp" disabled><i class="fas fa-spinner fa-spin active iconecompte"></i></button>
                    </div>

                    <label for="telephone">Telephone</label>
                    <div class="groupe">
                        <input type="text" name="telephone" id="telephone" class="inputformulaire" placeholder="0611111111" pattern="^[0-9]+$" minlength="10" maxlength="10" value="<?php echo($_SESSION['telephone']) ?>" data-extra="<?php echo($_SESSION['telephone']) ?>" required disabled>
                        <button hidden type="button" id="sauvegardertelephone" onclick="sauvegarder('telephone','sauvegardertelephone','annulertelephone','modifiertelephone','chargementtelephone');"><i class="fa-solid fa-floppy-disk iconecompte"></i></button>
                        <button hidden type="button" id="annulertelephone" onclick="annuler('telephone','sauvegardertelephone','annulertelephone','modifiertelephone','chargementtelephone');"><i class="fa-solid fa-xmark iconecompte"></i></button>
                        <button type="button" id="modifiertelephone" onclick="modifier('telephone','sauvegardertelephone','annulertelephone','modifiertelephone','chargementtelephone');"><i class="fa-solid fa-pencil iconecompte"></i></button>
                        <button hidden type="button" id="chargementtelephone" disabled><i class="fas fa-spinner fa-spin active iconecompte"></i></button>
                    </div>

                    <label for="inscription">Date d'inscription</label>
                    <div class="groupe">
                        <input type="text" name="inscription" id="inscription" class="inputformulaire" value="<?php echo($_SESSION['dateinscription']) ?>" disabled>
                    </div>

                    <label for="connexion">Date de dernière connexion</label>
                    <div class="groupe">
                        <input type="text" name="connexion" id="connexion" class="inputformulaire" value="<?php echo($_SESSION['dateconnexion']) ?>" disabled>
                    </div>

                    <div class="groupe fin">
                        <a href="../Pages/mesdemandes.php" class="compteformulaire">Voir mes demandes</a>
                        <button type="button" class="compteformulaire backred" onclick="supprimer();">Supprimer mon compte</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </body>

    <script type="text/javascript">
        window.addEventListener("load", select);
    </script>
</html>