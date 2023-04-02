form=document.getElementById("form")
prenom=document.getElementById("prenom")
nom=document.getElementById("nom")
pseudo=document.getElementById("pseudo")
mail=document.getElementById("mail")
pass=document.getElementById("pass")
pass_r=document.getElementById("pass_r")

form.addEventListener('submmit',(e)=>{
e.preventDefault();
validateinput();

})

setError=(element,message)=>{
    element.querySelector('input').classList.add("erreur")
    element.classList.remove("success")
    inputControl=element.parentElement
    errorDisplay=inputControl.querySelector("div.erreur")
    errorDisplay.innerText=message
    
    
}
validateinput()
 {
     if(prenom==""){
       setError(prenom,'prenom obligatoire');
    }else{
        setSuccess(prenom);
    };

    if(nom==""){
        setError(nom,'le nom obligatoire');
     }else{
         setSuccess(nom);
     };
     if(email==""){
        setError(email,'le mail est  obligatoire');
     }else{
         setSuccess(email);
     };
     if(pass=="")
        setError(pass,'le mot de passe est obligatoire');
    else if(passValue.lenght<8)
        setError(pass,'le mot de passe doit contenir plus de 8 caracteres');
     else{
         setSuccess(pass);
     };
     if(pass_r=="")
        setError(pass_r,"remplissez ce champs");
    else if (pass_rValue!=passValue)
        setError(pass_r,"les mots de passe saisis sont differents");       
     else
            setSuccess(pass_r);
}