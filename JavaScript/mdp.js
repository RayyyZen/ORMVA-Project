function opmdp(operation,mdpid,cache,montre){//Fonction pour cacher ou montrer le mot de passe
    var mdp = document.getElementById(mdpid);
    var buttoncache = document.getElementById(cache);
    var buttonmontre = document.getElementById(montre);

    if(operation == "cacher"){
        mdp.type = "password";
        buttoncache.hidden = true;
        buttonmontre.hidden = false;
    }
    else{
        mdp.type = "text";
        buttoncache.hidden = false;
        buttonmontre.hidden = true;
    }
}

function checkmdp(){//Fonction qui checke le mot de passe lors de l'inscription
    var mdp = document.getElementById("mdp");
    var cmdp = document.getElementById("cmdp");
    var erreur = document.getElementById("erreur");

    if(mdp.value == cmdp.value){
        return true;
    }
    else{
        erreur.hidden = false;
        //Pour afficher l'erreur
        return false;
    }
}

function remplissageCivilite(){//Fonction qui remplit la civilite dans la page d'inscription
    var civilite = document.getElementById("civilite");
    if(civilite.dataset.extra){
        civilite.value = civilite.dataset.extra;
    }
}