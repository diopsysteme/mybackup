<?php 
if(isset($_POST["submit"]))
{
    $url = $_POST['url']; 
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    if(!empty($url) && !empty($nom) && !empty($description))
    {
        $variable=mysqli_connect('localhost','kagna','passer','student');
        $sql="insert into tp values('$url','$nom','$description')";
        $fin=mysqli_query($variable,$sql);
        echo "données enregistrées avec succes";

    }else
        header('Location:insert2.html');
 
}else  header('Location:insert2.html');
?>