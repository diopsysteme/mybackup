
<!DOCTYPE html>
<head></head>
<body>
    <form method="get">
        <input type="text" name="motif" placeholder="entrez votre motif" value=""> 
        <input type="submit" name="sub" value="submit">
    </form>
</html>
<?php
$motif=$_GET["motif"];
 if (isset($_GET["sub"])&&!empty($_GET["motif"]))
 {
    $connect=mysqli_connect("localhost","kagna","passer","student");
    $sql="select * from etude where prenom='$motif' or nom='$motif'";
    $mql=$connect->query($sql);
    $tab=mysqli_fetch_all($mql, MYSQLI_ASSOC);
    if(mysqli_num_rows($mql)){
        echo $_GET["motif"]."  exist dans la base";
       foreach($tab as $row)
       echo "<br>".$row['id'];
       echo "<br>". $row['prenom'];
       echo "<br>".$row['nom'];
    }   
       
    else 
        echo $_GET["motif"]." n'existe pas ";



 }else 
 echo "";
?>