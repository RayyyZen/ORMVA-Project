<?php
    function acces($page){
        if(isset($_SESSION['id']) && ($page == "Connexion" || $page == "Inscription")){
            header("location: ../Pages/index.php");
        }
        else if(!isset($_SESSION['id']) && ($page == "Compte" || $page == "Demande" || $page == "Admin")){
            header("location: ../Pages/index.php");
        }
        else if(isset($_SESSION['role']) && $_SESSION['role'] != "banni" && $page == "Bannissement"){
            header("location: ../Pages/index.php");
        }
        else if(isset($_SESSION['role']) && $_SESSION['role'] == "banni" && $page != "Bannissement" && $page != "Compte"){
            header("location: ../Pages/bannissement.php");
        }
    }
?>