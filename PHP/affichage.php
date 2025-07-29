<?php
    function afficheHead($page){
        echo '<head>';
        echo '<title>'.$page.' | ORMVASM</title>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="description" content="Office Régional de Mise en Valeur Agricole du Souss Massa">';
        echo '<meta name="author" content="ORMVASM">';
        echo '<link rel="icon" type="image/png" href="../Data/logoAvecTitre.png">';
        echo '<link id="css" rel="stylesheet" type="text/css" href="../CSS/style.css">';
        echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">';
        if($page == "Connexion" || $page == "Inscription" || $page == "Compte"){
            echo '<script src="../JavaScript/mdp.js" type="text/javascript"></script>';
        }
        if($page == "Compte" || $page == "Admin"){
            echo '<script src="../JavaScript/informations.js" type="text/javascript"></script>';
        }
    }

    function afficheBarre($page){
        echo '
        <div class="barre">
            <a href="../Pages/index.php" class="lienlogo">
                <img src="../Data/logoSansTitre" class="logo">
                <div class="titre">ORMVASM</div>
            </a>
            <div class="icones">
                <a href="../Pages/demande.php" class="lienlogoicone">
                    <i class="fa-solid fa-envelope iconeicone"></i>
                    <div class="icone texte">Demande</div>
                </a>
        ';
        if(!isset($_SESSION['id'])){
            if($page != "Inscription" && $page != "Connexion"){
                echo '
                    <a href="../Pages/connexion.php" class="lienlogoicone">
                        <i class="fa-solid fa-circle-user iconeicone"></i>
                        <div class="icone texte">Connexion</div>
                    </a>
                ';
            }
        }
        else{
            echo '
                <a href="../Pages/compte.php" class="lienlogoicone">
                    <i class="fa-solid fa-circle-user iconeicone"></i>
                    <div class="icone texte">Compte</div>
                </a>
            ';
            if($_SESSION['role'] == "admin"){
                echo '
                    <a href="../Pages/admin.php" class="lienlogoicone">
                        <i class="fa-solid fa-user-gear iconeicone"></i>
                        <div class="icone texte">Admin</div>
                    </a>
                ';
            }
            echo '
                <a href="../PHP/deconnexion.php" class="lienlogoicone">
                    <i class="fa-solid fa-arrow-right-from-bracket iconeicone"></i>
                    <div class="icone texte">Deconnexion</div>
                </a>
            ';
        }
        echo '
            </div>
        </div>
        ';
    }

    function afficheAdmin(){
        require_once '../PHP/db.php';
        $mysqldb = connexionDB();

        $sql = "SELECT * FROM utilisateurs";
        $statement = $mysqldb->prepare($sql);
        $statement->execute();
        $utilisateurs = $statement->fetchAll(PDO::FETCH_ASSOC);
        echo '<form action="../PHP/formulaireadmin.php" method="POST" class="tab">';
        echo '<table class="tableadmin">';
        echo '<tr>
                <th></th>
                <th>Id</th>
                <th>Role</th>
                <th>Civilite</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse mail</th>
                <th>Telephone</th>
                <th>Inscription</th>
                <th>Derniere connexion</th>
              </tr>';
        foreach($utilisateurs as $utilisateur){
            echo '<tr>';
            echo '<td class="nepasremplir">
                    <button hidden type="button" id="sauvegarder_'.$utilisateur['id'].'" onclick="sauvegarderAdmin('.$utilisateur['id'].');"><i class="fa-solid fa-floppy-disk"></i></button>
                    <button hidden type="button" id="annuler_'.$utilisateur['id'].'" onclick="annulerAdmin('.$utilisateur['id'].');"><i class="fa-solid fa-xmark"></i></button>
                  ';
            if($utilisateur['id'] == $_SESSION['id']){
                echo '<button type="button" id="moi_-1"><i class="fa-solid fa-house-user"></i></button>';
            }
            else{
                echo '<button type="button" id="modifier_'.$utilisateur['id'].'" onclick="modifierAdmin('.$utilisateur['id'].');"><i class="fa-solid fa-pencil"></i></button>';
            }
            echo '<button hidden type="button" id="chargement_'.$utilisateur['id'].'" disabled><i class="fas fa-spinner fa-spin active"></i></button>';
            echo '</td>';
            echo '<td class="nepasremplir"><input type="text" name="id_'.$utilisateur['id'].'" id="id_'.$utilisateur['id'].'" value="'.$utilisateur['id'].'" data-extra="'.$utilisateur['id'].'" disabled></td>';
            echo '<td class="nepasremplir">
                    <select name="role_'.$utilisateur['id'].'" id="role_'.$utilisateur['id'].'"" data-extra="'.$utilisateur['role'].'" required disabled>
                        <option value="admin">Admin</option>
                        <option value="utilisateur">Utilisateur</option>
                        <option value="banni">Banni</option>
                    </select>
                  </td>';
            echo '<td class="nepasremplir">
                    <select name="civilite_'.$utilisateur['id'].'" id="civilite_'.$utilisateur['id'].'" data-extra="'.$utilisateur['civilite'].'" required disabled>
                        <option value="monsieur">Monsieur</option>
                        <option value="madame">Madame</option>
                    </select>
                  </td>';
            echo '<td class="nepasremplir"><input type="text" name="nom_'.$utilisateur['id'].'" id="nom_'.$utilisateur['id'].'" value="'.$utilisateur['nom'].'" data-extra="'.$utilisateur['nom'].'" placeholder="Ray" pattern="^[A-Za-z]+$" maxlength="29" required disabled></td>';
            echo '<td class="nepasremplir"><input type="text" name="prenom_'.$utilisateur['id'].'" id="prenom_'.$utilisateur['id'].'" value="'.$utilisateur['prenom'].'" data-extra="'.$utilisateur['prenom'].'" placeholder="Zen" pattern="^[A-Za-z]+$" maxlength="29" required disabled></td>';
            echo '<td class="nepasremplir"><input type="email" name="email_'.$utilisateur['id'].'" id="email_'.$utilisateur['id'].'" value="'.$utilisateur['email'].'" data-extra="'.$utilisateur['email'].'" placeholder="rayzen@gmail.com" pattern="^[A-Za-z0-9.@]+$" maxlength="60" required disabled></td>';
            echo '<td class="nepasremplir"><input type="text" name="telephone_'.$utilisateur['id'].'" id="telephone_'.$utilisateur['id'].'" value="'.$utilisateur['telephone'].'" data-extra="'.$utilisateur['telephone'].'" placeholder="0611111111" pattern="^[0-9]+$" minlength="10" maxlength="10" required disabled></td>';
            echo '<td class="nepasremplir"><input type="text" name="dateinscription_'.$utilisateur['id'].'" id="dateinscription_'.$utilisateur['id'].'" value="'.$utilisateur['dateinscription'].'" data-extra="'.$utilisateur['dateinscription'].'" disabled></td>';
            echo '<td class="nepasremplir"><input type="text" name="dateconnexion_'.$utilisateur['id'].'" id="dateconnexion_'.$utilisateur['id'].'" value="'.$utilisateur['dateconnexion'].'" data-extra="'.$utilisateur['dateconnexion'].'" disabled></td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</form>';
    }

    function afficheNumeros($nbrlignes){
        require_once '../PHP/db.php';
        $mysqldb = connexionDB();

        $sql = "SELECT COUNT(*) FROM utilisateurs";
        $statement = $mysqldb->prepare($sql);
        $statement->execute();
        $nbrutilisateurs = $statement->fetchColumn();

        $nbrpages = $nbrutilisateurs / $nbrlignes;
        $i = 0;
        echo '<button disabled type="button" class="numero" id="gauche" onclick="pagegauche('.$nbrlignes.');"><i class="fa-solid fa-circle-left"></i></button>';
        for($i=0;$i<$nbrpages;$i++){
            $j = $i+1;
            echo '<button type="button" class="chiffre" id="'.$j.'" onclick="affichepages('.$nbrlignes.','.$j.');">'.$j.'</button>';
        }
        echo '<button disabled type="button" class="numero" id="droite" onclick="pagedroite('.$nbrlignes.');"><i class="fa-solid fa-circle-right"></i></button>';
    }
?>