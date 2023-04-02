function ge(){
   /* let nom =nom.value; */
    /*var prenom = document.getElementById('prenom').value;
    alert(nom.value+prenom);*/
    //alert(document.getElementById('prenom').value)

    if(document.getElementById('prenom').value==''||document.getElementById('nom').value==''||document.getElementById('age').value=='' )
    alert("erreur !!!\n veuillez remplir tous les champs svp")
    else
     alert("votre prenom et nom: "+document.getElementById('prenom').value+" "+document.getElementById('nom').value+"\nvous etes agé de "+document.getElementById('age').value+"ans")
}
function allume(){
   document.getElementById('monImage').src='lamp-on.jfif'
}
function et(){
    document.getElementById('monImage').src='lamp-off.jfif'
}
