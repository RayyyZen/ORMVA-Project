<?php
    function acces($page){
        if(isset($_SESSION['id']) && ($page == "Connexion" || $page == "Inscription")){
            header("location: ../Pages/index.php");
        }
        else if(!isset($_SESSION['id']) && ($page == "Compte" || $page == "Demande" || $page == "Admin" || $page == "Bannissement" || $page == "Mes demandes")){
            header("location: ../Pages/connexion.php");
        }
        else if(isset($_SESSION['role']) && $_SESSION['role'] == "admin" && $page == "Demande"){
            header("location: ../Pages/mesdemandes.php");
        }
        else if(isset($_SESSION['role']) && $_SESSION['role'] != "banni" && $page == "Bannissement"){
            header("location: ../Pages/index.php");
        }
        else if(isset($_SESSION['role']) && $_SESSION['role'] == "banni" && $page != "Bannissement" && $page != "Compte"){
            header("location: ../Pages/bannissement.php");
        }
        else if(!isset($_GET['id']) && $page == "Voir demande"){
            header("location: ../Pages/mesdemandes.php");
        }
    }
?>