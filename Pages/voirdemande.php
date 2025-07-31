<?php
    session_start();
    require_once '../PHP/affichage.php';
    require_once '../PHP/acces.php';
    acces("Voirdemande");

    if(!isset($_GET['id'])){
        header("location: ../Pages/mesdemandes.php");
    }

    require_once '../PHP/db.php';
    $mysqldb = connexionDB();

    $sql = "SELECT * FROM demandes WHERE id = :id";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':id' => $_GET['id'],
    ]);
    $demande = $statement->fetch(PDO::FETCH_ASSOC);
    if($demande === false){
        header("location: ../Pages/mesdemandes.php");
    }


    $sql = "SELECT * FROM utilisateurs WHERE id = :id";
    $statement = $mysqldb->prepare($sql);
    $statement->execute([
        ':id' => $demande['id_utilisateur'],
    ]);
    $utilisateur = $statement->fetch(PDO::FETCH_ASSOC);
    if($utilisateur === false){
        header("location: ../Pages/mesdemandes.php");
    }

?>

<!DOCTYPE HTML>

<html>
    <?php
        afficheHead("Voirdemande");
    ?>

    <body>
        <?php
            afficheBarre("Voirdemande");
        ?>

        <form action="../PHP/formulairereponse.php" method="POST" onsubmit="return checkValidation();">
            <fieldset class="formulaire">
                <legend class="legend">Demande</legend>
                <div class="champs">
                    <input name="id" value="<?php echo($demande['id']) ?>" readonly hidden>

                    <?php
                        if($_SESSION['role'] == "admin"){
                            echo '<label for="nometprenom">Nom et prenom</label>';
                            echo '<div class="groupe">';
                            echo '<input type="text" name="nometprenom" id="nometprenom" class="inputformulaire" value="'.$utilisateur['nom']." ".$utilisateur['prenom'].'" disabled>';
                            echo '</div>';
                        }
                    ?>

                    <label for="date">Date</label>
                    <div class="groupe">
                        <input type="text" name="date" id="date" class="inputformulaire" value="<?php echo($demande['datedemande']); ?>" disabled>
                    </div>

                    <label>Type</label>
                    <div class="groupe radio">
                        <?php
                            $lower = strtolower($demande['type']);
                            echo '<input type="radio" name="type" id="'.$lower.'" class="inputformulaire inputradio" value="'.$lower.'" checked disabled>';
                            echo '<label for="'.$lower.'">'.$demande['type'].'</label>';
                        ?>
                    </div>

                    <label for="titre">Titre</label>
                    <div class="groupe">
                        <textarea type="text" name="titre" id="titre" class="textformulaire" placeholder="Ecrivez ici le titre de la demande..." maxlength="92" disabled><?php echo($demande['titre']); ?></textarea>
                    </div>

                    <label for="description">Description</label>
                    <div class="groupe">
                        <textarea type="text" name="description" id="description" class="textformulaire" placeholder="Ecrivez ici la description de la demande..." maxlength="1978" disabled><?php echo($demande['description']); ?></textarea>
                    </div>
                    
                    <?php
                        echo '<label for="statut">Statut</label>';
                        echo '<div class="groupe">';
                        if($demande['statut'] == "En attente"){
                            $style = "attente";
                        }
                        else if($demande['statut'] == "Valide"){
                            $style = "valide";
                        }
                        else{
                            $style = "refuse";
                        }
                        echo '<input type="text" name="statut" id="statut" class="inputformulaire '.$style.'" value="'.$demande['statut'].'" disabled>';
                        echo '</div>';
                        
                        if($_SESSION['role'] != "admin"){
                            if($demande['reponse'] != ""){
                                echo '<label for="reponse">Reponse</label>';
                                echo '<div class="groupe">';
                                echo '<textarea type="text" name="reponse" id="reponse" class="textformulaire" placeholder="Ecrivez ici la reponse de la demande..." maxlength="1978" disabled>'.$demande['reponse'].'</textarea>';
                                echo '</div>';
                            }
                            else{

                            }
                        }
                        else{
                            if($demande['statut'] == "En attente"){
                                echo '<label for="reponse">Reponse</label>';
                                echo '<div class="groupe">';
                                echo '<textarea type="text" name="reponse" id="reponse" class="textformulaire reponse" placeholder="Ecrivez ici la reponse de la demande..." maxlength="1978" required></textarea>';
                                echo '</div>';
                                echo '<div class="groupe radio">';
                                echo '<input type="radio" id="valider" name="statutdemande" class="inputformulaire inputradio valider" value="valider">';
                                echo '<label for="valider">Valider</label>';
                                echo '<input type="radio" id="refuser" name="statutdemande" class="inputformulaire inputradio refuser" value="refuser">';
                                echo '<label for="refuser">Refuser</label>';
                                echo '</div>';
                                echo '<div hidden id="erreur" class="erreur2"><i class="fa-solid fa-triangle-exclamation"></i> Validez ou refusez la demande !</div>';
                                echo '<input type="submit" name="envoyer" id="envoyer" value="Envoyer" class="submitformulaire margin">';
                            }
                            else{
                                echo '<label for="reponse">Reponse</label>';
                                echo '<div class="groupe">';
                                echo '<textarea type="text" name="reponse" id="reponse" class="textformulaire" placeholder="Ecrivez ici la reponse de la demande..." maxlength="1978" disabled>'.$demande['reponse'].'</textarea>';
                                echo '</div>';
                            }
                        }
                    ?>

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