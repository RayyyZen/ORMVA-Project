function sauvegarder(champ,sauvegarder,annuler,modifier,chargement){
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
    if(champ == "mdp"){
        chaine += "changementmdp=oui";
    }
    else{
        chaine += "changementmdp=non";
    }

    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    //Afin de pouvoir envoyer les données en Post sous la forme "a=1&b=2...."
    xhr.send(chaine);
}

function annuler(champ,sauvegarder,annuler,modifier,chargement){
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
        }
    }

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

function supprimer(){
    if(window.confirm("Souhaitez-vous vraiment supprimer votre compte ? Cette opération est irréversible !")){
        window.location.href = "../PHP/suppression.php";
    }
}

function civilite(){
    var civilite = document.getElementById("civilite");
    civilite.value = civilite.dataset.extra;
}

function select(){
    var select = document.getElementsByTagName("select");
    var i;
    for(i=0;i<select.length;i++){
        select[i].value = select[i].dataset.extra;
    }
}

function sauvegarderAdmin(id){
    var form = document.querySelector("form.tab");
    
    if (!form.checkValidity()) {
        form.reportValidity(); // Affiche les erreurs natives HTML
        return;
    }

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
        }
    }

    xhr.onreadystatechange = function(){
        var erreur = document.getElementById("erreur");

        if(xhr.readyState == 4){
            inputs[2].hidden = false;
            inputs[3].hidden = true;

            for(i=5;i<11;i++){
                inputs[i].disabled = true;
                inputs[i].parentNode.classList.add('nepasremplir');
                inputs[i].parentNode.classList.remove('remplir');
            }

            if(xhr.status == 200 && xhr.responseText != "email"){
                for(i=5;i<11;i++){
                    inputs[i].dataset.extra = inputs[i].value;
                }
            }
            else{
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
    console.log(chaine);

    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    //Afin de pouvoir envoyer les données en Post sous la forme "a=1&b=2...."
    xhr.send(chaine);
}

function annulerAdmin(id){
    var input = document.querySelectorAll("input, select, button, submit");
    var inputs = new Array();
    var i;
    var erreur = document.getElementById("erreur");

    erreur.hidden = true;

    for(i=0;i<input.length;i++){
        if(input[i].id.split('_')[1] == id){
            inputs.push(input[i]);
        }
    }

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
        }
    }

    inputs[0].hidden = false;
    inputs[1].hidden = false;
    inputs[2].hidden = true;

    for(i=5;i<11;i++){
        inputs[i].disabled = false;
        inputs[i].parentNode.classList.add('remplir');
        inputs[i].parentNode.classList.remove('nepasremplir');
    }
}

function affichepages(nbrlignes,numeropage){
    var lignes = document.getElementsByTagName("tr");
    var i;
    var min=nbrlignes*(numeropage-1)+1, max=nbrlignes*numeropage+1;
    for(i=1;i<lignes.length;i++){
        if(i>=min && i<max){
            lignes[i].hidden = false;
        }
        else{
            lignes[i].hidden = true;
        }
    }
    var pageactuelle = document.getElementById("pageactuelle");
    pageactuelle.value = numeropage;
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
    if(max < lignes.length){
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
    while(document.getElementById(id)){
        if(id == numeropage){
            document.getElementById(id).classList.add("selectionne");
        }
        else{
            document.getElementById(id).classList.remove("selectionne");
        }
        id++;
    }
}

function pagegauche(nbrlignes){
    var pageactuelle = document.getElementById("pageactuelle");
    affichepages(nbrlignes,parseInt(pageactuelle.value)-1);
}

function pagedroite(nbrlignes){
    var pageactuelle = document.getElementById("pageactuelle");
    affichepages(nbrlignes,parseInt(pageactuelle.value)+1);
}