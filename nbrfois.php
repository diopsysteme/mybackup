<?php
session_start();
if(isset($_POST['destroy'])){
    session_destroy();
    $_SESSION['visites'] = 0;
    header("refresh: 1");
}

if (!isset($_SESSION['visites'])) {
    $_SESSION['visites'] = 1;
} else {
    $_SESSION['visites']++;
}

echo "Vous avez visité cette page ".$_SESSION['visites']." fois.";

    


?>
<form method="post"><input type="submit" value="destroy" name="destroy"/></form>
