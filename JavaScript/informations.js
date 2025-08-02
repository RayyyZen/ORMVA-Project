function buttonsDisabled(bool){//Fonction qui active ou desactive tous les boutons modifier de la page informations
    var input = document.querySelectorAll("input, select");
    var button;
    var i;
    for(i=0;i<input.length;i++){
        button = document.getElementById("modifier" + input[i].id);
        if(button != null){
            button.disabled = bool;
        }
    }
}

function sauvegarder(champ,sauvegarder,annuler,modifier,chargement){//Fonction qui sauvegarde les modifications faites sur un champ de la page d'informations
    var form = document.querySelector("form");
    if (!form.checkValidity()) {
        form.reportValidity(); // Affiche les erreurs HTML
        return;
    }
    //Avant de sauvegarder ca checke les erreurs dues aux attributs de la balise input comme le regex et les maxlength ...

    if(window.XMLHttpRequest){
        var xhr = new XMLHttpRequest();
    }
    else{
        var xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xhr.onreadystatechange = function(){
        var idchamp = document.getElementById(champ);
        var idsauvegarder = document.getElementById(sauvegarder);
        var idannuler = document.getElementById(annuler);
        var idmodifier = document.getElementById(modifier);
        var idchargement = document.getElementById(chargement);
        var erreur = document.getElementById("erreur");

        if(xhr.readyState == 4){
            idmodifier.hidden = false;
            idchargement.hidden = true;

            buttonsDisabled(false);
            //Pour réactiver les boutons modifier de chaque champ

            if(champ == "mdp"){
                idchamp.value = idchamp.dataset.extra;
            }

            if(xhr.status == 200 && xhr.responseText != "email"){
                if(champ != "mdp"){
                    idchamp.dataset.extra = idchamp.value;
                }
            }
            else{
                if(champ != "mdp"){
                    idchamp.value = idchamp.dataset.extra;
                }
                if(xhr.responseText == "email"){
                    erreur.hidden = false;
                }
            }
        }
        else{
            idchamp.disabled = true;
            idsauvegarder.hidden = true;
            idannuler.hidden = true;
            idmodifier.hidden = true;
            idchargement.hidden = false;
        }
    }

    xhr.open("POST","../PHP/formulairecompte.php",true);
    var input = document.querySelectorAll("input, select");
    var i,chaine = "";
    for(i=0;i<input.length;i++){
        chaine = chaine + input[i].name + "=" + input[i].value + "&";
    }
    if(champ == "mdp"){//Pour savoir s'il y a eu un changement de mot de passe ou pas
        chaine += "changementmdp=oui";
    }
    else{
        chaine += "changementmdp=non";
    }

    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    //Afin de pouvoir envoyer les données en Post sous la forme "a=1&b=2...."
    xhr.send(chaine);
}

function annuler(champ,sauvegarder,annuler,modifier,chargement){//Fonction qui annule les modifications faites sur un champ de la page d'informations
    buttonsDisabled(false);
    //Pour réactiver les boutons modifier de chaque champ

    var idchamp = document.getElementById(champ);
    var idsauvegarder = document.getElementById(sauvegarder);
    var idannuler = document.getElementById(annuler);
    var idmodifier = document.getElementById(modifier);
    var erreur = document.getElementById("erreur");

    erreur.hidden = true;
    idchamp.disabled = true;
    idchamp.value = idchamp.dataset.extra;
    idsauvegarder.hidden = true;
    idannuler.hidden = true;
    idmodifier.hidden = false;
}

function modifier(champ,sauvegarder,annuler,modifier,chargement){
    var input = document.querySelectorAll("input, select");
    var button;
    var i;
    for(i=0;i<input.length;i++){
        button = document.getElementById("modifier" + input[i].id);
        if(button != null && button.hidden == true){
            return;
            //Pour quitter la fonction au cas où un autre champ est déjà entrain d'être modifié
        }
    }

    buttonsDisabled(true);
    //Pour désactiver tous les boutons modifier

    var idchamp = document.getElementById(champ);
    var idsauvegarder = document.getElementById(sauvegarder);
    var idannuler = document.getElementById(annuler);
    var idmodifier = document.getElementById(modifier);
    var erreur = document.getElementById("erreur");

    erreur.hidden = true;
    if(champ == "mdp"){
        idchamp.value = "";
    }
    idchamp.disabled = false;
    idsauvegarder.hidden = false;
    idannuler.hidden = false;
    idmodifier.hidden = true;
}

function supprimer(){//Fonction qui affiche une annonce afin de confirmer la suppression du compte de l'utilisateur connecté
    if(window.confirm("Souhaitez-vous vraiment supprimer votre compte ? Cette opération est irréversible !")){
        window.location.href = "../PHP/suppression.php";
        //Envoi vers le script suppression.php pour supprimer l'utilisateur de la base de données
    }
}

function select(){//Fonction qui remplit tous les select avec leurs vraies valeurs (Chose qui ne peut pas etre faite en php comme avec les autres inputs)
    var select = document.getElementsByTagName("select");
    var i;
    for(i=0;i<select.length;i++){
        select[i].value = select[i].dataset.extra;
    }
}

function buttonsDisabledAdmin(bool){//Fonction qui active ou desactive tous les boutons modifier de la page admin
    var input = document.querySelectorAll("input, select, button, submit");
    var i;
    for(i=0;i<input.length;i++){
        if(input[i].id.split('_')[0] == "modifier"){
            input[i].disabled = bool;
        }
    }
}

function sauvegarderAdmin(id){//Fonction qui sauvegarde les modifications faites sur un champ de la page admin
    var form = document.querySelector("form");
    if (!form.checkValidity()) {
        form.reportValidity(); // Affiche les erreurs HTML
        return;
    }
    //Avant de sauvegarder ca checke les erreurs dues aux attributs de la balise input comme le regex et les maxlength ...

    if(window.XMLHttpRequest){
        var xhr = new XMLHttpRequest();
    }
    else{
        var xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }

    var input = document.querySelectorAll("input, select, button, submit");
    var inputs = new Array();
    for(i=0;i<input.length;i++){
        if(input[i].id.split('_')[1] == id){
            inputs.push(input[i]);
            //Pour regrouper les elements lies a l'utilisateur que je cherche
        }
    }

    xhr.onreadystatechange = function(){
        var erreur = document.getElementById("erreur");

        if(xhr.readyState == 4){
            inputs[2].hidden = false;
            inputs[3].hidden = true;

            buttonsDisabledAdmin(false);

            for(i=5;i<11;i++){
                inputs[i].disabled = true;
                inputs[i].parentNode.classList.add('nepasremplir');
                inputs[i].parentNode.classList.remove('remplir');
            }

            if(xhr.status == 200 && xhr.responseText != "email"){
                inputs[5].classList.remove(inputs[5].dataset.extra);
                inputs[5].classList.add(inputs[5].value);
                //Il y a des classes "admin", "utilisateur" et "banni"
                for(i=5;i<11;i++){
                    inputs[i].dataset.extra = inputs[i].value;
                }
            }
            else{
                inputs[5].classList.remove(inputs[5].value);
                inputs[5].classList.add(inputs[5].dataset.extra);
                //Il y a des classes "admin", "utilisateur" et "banni"
                for(i=5;i<11;i++){
                    inputs[i].value = inputs[i].dataset.extra;
                }
                if(xhr.responseText == "email"){
                    erreur.hidden = false;
                }
            }
        }
        else{
            for(i=5;i<11;i++){
                inputs[i].disabled = true;
            }
            inputs[0].hidden = true;
            inputs[1].hidden = true;
            inputs[2].hidden = true;
            inputs[3].hidden = false;
        }
    }

    xhr.open("POST","../PHP/formulaireadmin.php",true);
    var i,chaine = "";
    for(i=4;i<10;i++){
        chaine = chaine + inputs[i].name.split('_')[0] + "=" + inputs[i].value + "&";
    }
    chaine = chaine + inputs[i].name.split('_')[0] + "=" + inputs[i].value;

    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    //Afin de pouvoir envoyer les données en Post sous la forme "a=1&b=2...."
    xhr.send(chaine);
}

function annulerAdmin(id){//Fonction qui annule les modifications faites sur un champ de la page admin
    var input = document.querySelectorAll("input, select, button, submit");
    var inputs = new Array();
    var i;
    var erreur = document.getElementById("erreur");

    erreur.hidden = true;

    for(i=0;i<input.length;i++){
        if(input[i].id.split('_')[1] == id){
            inputs.push(input[i]);
            //Pour regrouper les elements lies a l'utilisateur que je cherche
        }
    }

    buttonsDisabledAdmin(false);

    inputs[0].hidden = true;
    inputs[1].hidden = true;
    inputs[2].hidden = false;

    for(i=5;i<11;i++){
        inputs[i].value = inputs[i].dataset.extra;
        inputs[i].disabled = true;
        inputs[i].parentNode.classList.add('nepasremplir');
        inputs[i].parentNode.classList.remove('remplir');
    }
}

function modifierAdmin(id){
    var input = document.querySelectorAll("input, select, button, submit");
    var inputs = new Array();
    var i;
    var erreur = document.getElementById("erreur");

    erreur.hidden = true;

    for(i=0;i<input.length;i++){
        if(input[i].id.split('_')[0] == "modifier" && input[i].hidden == true){
            return;
        }
        if(input[i].id.split('_')[1] == id){
            inputs.push(input[i]);
            //Pour regrouper les elements lies a l'utilisateur que je cherche
        }
    }

    buttonsDisabledAdmin(true);

    inputs[0].hidden = false;
    inputs[1].hidden = false;
    inputs[2].hidden = true;

    for(i=5;i<11;i++){
        inputs[i].disabled = false;
        inputs[i].parentNode.classList.add('remplir');
        inputs[i].parentNode.classList.remove('nepasremplir');
    }
}

function affichepages(tableau,nbrlignes,numeropage){//Affiche un nombre fixe d'utilisateurs en fonction du numero de page
    var ligne = document.querySelectorAll("tr");
    var lignes = new Array();
    var i;
    var min=nbrlignes*(numeropage-1), max=nbrlignes*numeropage;
    var compteur = 0;
    for(i=0;i<ligne.length;i++){
        if(tableau == "demandes" && ligne[i].hidden == false){
            lignes.push(ligne[i]);
        }
        else if(tableau == "utilisateurs"){
            lignes.push(ligne[i]);
        }
    }
    for(i=1;i<lignes.length;i++){//i=0 c'est l'entete du tableau
        if(compteur >= min && compteur < max){
            lignes[i].hidden = false;
        }
        else{
            lignes[i].hidden = true;
        }
        compteur++;
    }
    var pageactuelle = document.getElementById("pageactuelle");
    pageactuelle.value = numeropage;
    //pageactuelle est un element html qui contient le numero de la page actuelle
    if(numeropage > 1){
        document.getElementById("gauche").disabled = false;
        document.getElementById("gauche").classList.add("numerobutton");
        document.getElementById("gauche").classList.remove("numero");
    }
    else{
        document.getElementById("gauche").disabled = true;
        document.getElementById("gauche").classList.add("numero");
        document.getElementById("gauche").classList.remove("numerobutton");
    }

    var id=1;
    while(document.getElementById(id) && !document.getElementById(id).hidden){
        id++;
    }
    id--;
    //Pour savoir le numéro de la dernière page

    if(numeropage < id){
        document.getElementById("droite").disabled = false;
        document.getElementById("droite").classList.add("numerobutton");
        document.getElementById("droite").classList.remove("numero");
    }
    else{
        document.getElementById("droite").disabled = true;
        document.getElementById("droite").classList.add("numero");
        document.getElementById("droite").classList.remove("numerobutton");
    }

    id = 1;
    while(document.getElementById(id)){//Pour demarquer la page actuelle des autres pages visuellement
        if(id == numeropage){
            document.getElementById(id).classList.add("selectionne");
        }
        else{
            document.getElementById(id).classList.remove("selectionne");
        }
        id++;
    }
}

function pagegauche(tableau,nbrlignes){//Fonction qui passe à la page de gauche (page admin et mesdemandes)
    var pageactuelle = document.getElementById("pageactuelle");
    if(tableau == "utilisateurs"){
        affichepages(tableau,nbrlignes,parseInt(pageactuelle.value)-1);
    }
    else{
        filtrer(nbrlignes,parseInt(pageactuelle.value)-1);
    }
}

function pagedroite(tableau,nbrlignes){//Fonction qui passe à la page de droite (page admin et mesdemandes)
    var pageactuelle = document.getElementById("pageactuelle");
    if(tableau == "utilisateurs"){
        affichepages(tableau,nbrlignes,parseInt(pageactuelle.value)+1);
    }
    else{
        filtrer(nbrlignes,parseInt(pageactuelle.value)+1);
    }
}

function filtrer(nbrlignes,numeropage){//Fonction qui filtre et affiche le tableau des demandes en fonction dy type et du statut choisi
    var select = document.getElementsByTagName("select");
    var lignes = document.getElementsByTagName("tr");
    var i;
    var chaine;
    var compteur=0;
    for(i=2;i<lignes.length;i++){
        chaine = lignes[i].dataset.extra;
        if((select[0].value == "vide" || chaine.split("_")[0] == select[0].value) && (select[1].value == "vide" || chaine.split("_")[1] == select[1].value)){
            lignes[i].hidden = false;
            compteur++;
        }
        else{
            lignes[i].hidden = true;
        }
    }
    if(compteur == 0){
        document.getElementById("vide").hidden = false;
    }
    else{
        document.getElementById("vide").hidden = true;
    }

    var nbr = Math.ceil(compteur / nbrlignes);

    var j = 1;
    while(document.getElementById(j)){
        if(j<=nbr){
            document.getElementById(j).hidden = false;
        }
        else{
            document.getElementById(j).hidden = true;
        }
        j++;
    }

    affichepages("demandes",nbrlignes,numeropage);
}