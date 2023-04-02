<?php

function ht(){
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <form method='post'>
            <table>
                <tr><td>Nom</td><td><input name="nom" type="text" value="<?=$_POST["nom"]?>" </td></tr>
                <tr><td>Prenom</td><td><input name="prenom" type="text" value="<?=$_POST["prenom"]?>" </td></tr>
            </table>
            <input type='submit' value='valider'>
            </form>
        </body>
        </html>
        <?php
};

if(!isset($_POST['nom'],$_POST["prenom"])){
    ht();
}else{
    if(!empty($_POST["prenom"]) && !empty($_POST["nom"])){
        echo 'Bravo!<br>Prenom:'.$_POST["prenom"].'<br>Nom:'.$_POST["nom"];
    }else{
        if(empty($_POST["prenom"]))
             echo "le champs Prenom est vide";
        else if(empty($_POST["nom"]))
            echo "le champs Nom est vide ";
        else  echo "veuillez remplir ts les champs ";
        ht();
        
    }
}
?>
