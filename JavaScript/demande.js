function checkTypeDemande(){//Checke si un type a été sélectionne lors de la demande
    var radio = document.getElementsByName("type");
    var i;
    for(i=0;i<radio.length;i++){
        if(radio[i].checked){
            return true;
        }
    }
    var erreur = document.getElementById("erreur");
    erreur.hidden = false;
    return false;
}

function checkValidation(){//Checke si la demande a été validé ou refusé
    var valider = document.getElementById("valider");
    var refuser = document.getElementById("refuser");
    var erreur = document.getElementById("erreur");
    if(!valider.checked && !refuser.checked){
        erreur.hidden = false;
        return false;
    }
    return true;
}