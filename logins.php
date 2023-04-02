<?php
$log="admin";
$pass="passer";
if($log==$_POST['log'] && $pass==$_POST['pass'] )
echo "connexion reussi"."<br> bienvenue $log";
else {
    echo "login ou mot de pass incorrects <br> <a href='loginshtml.php'>retour</a>";
    $_SESSION['log']=$_POST['log'];
    $_POST['pass']="";
   header("Location:loginshtml.php");
}
?>