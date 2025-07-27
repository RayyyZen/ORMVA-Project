function opmdp(operation,mdpid,cache,montre){
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

function checkmdp(){
    var mdp = document.getElementById("mdp");
    var cmdp = document.getElementById("cmdp");
    var erreur = document.getElementById("erreur");

    if(mdp.value == cmdp.value){
        return true;
    }
    else{
        erreur.hidden = false;
        return false;
    }
}

function remplissageCivilite(){
    var civilite = document.getElementById("civilite");
    if(civilite.dataset.extra){
        civilite.value = civilite.dataset.extra;
    }
}