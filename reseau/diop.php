<html >
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
      
     
   
    /*?>
    <script>
        alert("votre nom svp"); 
        var nom=prompt("donner votre nom");
        alert(nom);
    </script>
    <?php

    <script>
    alert("votre nom svp"); 
    var nom=prompt("donner votre nom");
    alert(nom);
    </script>
    $bd=array(
        'nom'=>'fall',
        'prenom'=>'yacine',
        'id'=>12345678,
        'nom'=> $nom
     );
     foreach ($bd as $i)

    {echo ($i."</br>");} // pour compter les cle dans un tableau
   // array_values($bd); //compter les valeur dans un tableau
   foreach ($bd as $i=>$valeur)

   {echo $i." ".$valeur."</br>";}
  $bd = array(
    array('mouhamadou','diop',19),
    array('madicke','cisse',22),
    array('medzo','sall',23),
    array('youga','cisse',30)
   );
for ($i=0;$i<3;$i++)
{
  echo "membre " .$i+1 ; 
    for ($j=0;$j<3;$j++)
{
    echo $bd[$i][$j].' ';
}
echo '</br>';
}
    echo '<input type="email" key="diop" name="mail" placeholder="mails" class="diop" id="diop" value="dioprassoul@gmail.com">';
   echo $_POST['mail'];
   $bd=array(
    'nom'=>'fall',
    'prenom'=>'yacine',
    'id'=>12345678,
    );
  print_r(array_values($bd));*/


    ?>
    <form action="ph.php" method="post">
     <input type="text" name="nom" /></br>
     <input type="text" name="age" /></br>
     <input type="text" name="adresse" /></br>
     <input type="text" name="nom" /></br>
     <input type="submit" name="submit" /> 
   
</form>
    
</body>
</html>