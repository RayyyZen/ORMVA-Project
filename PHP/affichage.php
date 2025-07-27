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
        if($page == "Connexion"){
            echo '<script src="../JavaScript/mdp.js" type="text/javascript"></script>';
        }
        echo '</head>';
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
?>