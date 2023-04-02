<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$user='kagna';
$pass='passer';
$variable=mysqli_connect('localhost',$user,$pass,'student');
$sql="select * from etud where id=$id";
$result=mysqli_query($variable,$sql);
$tab=mysqli_fetch_assoc($result);
if($tab)
{
    $prenom=$tab['prenom'];
    $nom=$tab['nom'];
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
             <form action="" method="post">
                <input type="text" placeholder="prenom" name="prenom" value="<?=$prenom?>"><br>
                <input type="text" placeholder="nom" name="nom" value="<?=$nom?>"><br>
                <input type="submit" value="valider" name="submit"><br>
             </form>
        </body>
        </html>
        <?php
}else header('location:affi.php');

if(isset($_POST['submit']))
{
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $sql2="update etud set prenom='$prenom' , nom='$nom' where id=$id";   
    $res=mysqli_query($variable,$sql2);
    header('location:affi.php');
}

}else header('location:affi.php');

?>