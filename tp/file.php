
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"  action="file.php" ENCTYPE="multipart/form-data">
        file: <input type="file" name="fig" >
         <input type="submit" value="valider" name="valider"><br>
         <input type="text" name="motif" placeholder="entrez un motif">
     </form>
</body>
</html>
<?php
if(isset($_POST['valider']))
{
    if($_FILES["fig"]["tmp_name"] && !empty($_POST['motif']))
    {
            $motif=$_POST['motif'];
            $motif2="<a style='color:red;'>$motif</a>";
            $file="/var/www/html/tp/".$_FILES["fig"]["name"];
            copy($_FILES["fig"]["tmp_name"],$file);
            $file2=file_get_contents($file);
            str_replace($motif,$motif2,$file2,$nbr);
            if($nbr==0)
            echo " <br> <br><p style='color:red;'>le motif renseigné ne se trouve pas dans le fichier spécifié</p>";  
            echo str_replace($motif,$motif2,$file2); 
    
    
    }else echo 'fichier et/ou motif innexistant';
    

}


 //echo $motif2;
 
//header("Content-Type:Application/pdf");
/*echo "nom origine:".$_FILES["fig"]["name"];
echo "<br>nom temporaire:".$_FILES["fig"]["tmp_name"];
echo "<br>Taille:".$_FILES["fig"]["size"];*/
//$destination="/home/mhd/Documents/upload";

//echo "</br>".$file2;
//$contents = fread($handle, filesize($file));
/*do{ 
    str_replace(fgets($handle),)
    echo "</br>".fgets($handle);
    
}while(fgets($handle));
/*do{ 
    fgets($handle);
    if(strpos(fgets($handle),$motif))
   $motif=$motif2;
}while(fgets($handle));
fclose($handle);
//echo $contents;
//echo "<br>".$a;
//readfile($file);*/
?>
 