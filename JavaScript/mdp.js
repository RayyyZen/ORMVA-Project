function opmdp(operation){
    var mdp = document.getElementById("mdp");
    var buttoncache = document.getElementById("buttoncache");
    var buttonmontre = document.getElementById("buttonmontre");

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