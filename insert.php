<?php 
if(isset($_POST["submit"]))
{
    $prenom = $_POST['prenom']; 
    $nom = $_POST['nom'];
    if(!empty($prenom) && !empty($nom))
    {
        $variable=mysqli_connect('localhost','kagna','passer','student');
        $sql="insert into etud(prenom,nom) values('$prenom','$nom')";
        $fin=mysqli_query($variable,$sql);
        echo "données enregistrées avec succes";

    }else
        echo "veuillez remplir tous les champs";
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="prenom"  placeholder="prenom" /></br>
        <input type="text" name="nom" placeholder="nom" /></br>
        <input type="submit" name="submit" value="valider"/> </br>
        pour aller à l'accueil click <a href="affi.php">Ici</a>
      
       
    </form>
</body>
</html>
