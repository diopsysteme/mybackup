<?php


function form(){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
            
        <title>Document</title>
    </head>
    <body>
        <form  method="post">
            <input type="text" name="prenom"  placeholder="prenom" value="<?php echo $_POST['prenom']; ?>"></br>
            <input type="text" name="nom" placeholder="nom" value="<?php echo $_POST['nom']; ?>"></br>
            <input type="submit" value='submit' name="submit" />  
        </form>
    </body>
    </html>
<?php
};
 
if(isset($_POST['submit']))
{
	if(empty($_POST['prenom']) || empty($_POST['nom']) )
	form();

    if(empty($_POST['prenom']) )
        echo " <br>le champs prenom n'est pas rempli <br>";

    if(empty($_POST['nom']) )
        echo "le champs nom n'est pas rempli";

    if(!empty($_POST['prenom'])&& !empty($_POST['nom']))
        echo "bravo vous avez rempli tous les champs";
   


    
}else {
         form();
    }


//form();
?>

