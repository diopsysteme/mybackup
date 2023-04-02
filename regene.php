<?php
function afficheForm(){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
       <center>
       <form action=""  method="post">
            <input type="text" name="prenom"  placeholder="prenom" value="<?php echo $_POST['prenom']; ?>"></br>
            <input type="number" name="age" placeholder="age" value="<?php echo $_POST['age']; ?>"></br>
            <input type="submit" value='submit' name="submit" />  
        </form>
       </center>
    </body>
    </html>
<?php
};
 if(isset($_POST['submit']))
{
	if(!empty($_POST['prenom'])&& !empty($_POST['age']))
            echo "BONJOUR! votre age est :".$_POST['age'] ;
    else
    {
        if(empty($_POST['prenom']) )
            echo "veuilliez renseigner votre prenom <br>";
        if(empty($_POST['age']) )
            echo "veuillez renseigner votre age";
        afficheForm();
    }
}else
    {
        $_POST['prenom']="";
        $_POST['age']="";
        afficheForm();
    }
?>

