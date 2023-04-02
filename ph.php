<?php
     $prenom = $_GET['prenom']; 
     $nom = $_GET['nom'];;
    
     /*echo '<h3>Informations récupérées </h3>'; 
     echo 'prenom : ' . $_POST['prenom'] . '</br> nom : ' .$_POST['nom']. ' </br>numero: ' . $_POST['numero']. '</br> mail: '. $_POST['mail']; 
     */
      $variable=mysqli_connect('localhost','kagna','passer','student');
      $sql="insert into etude(prenom,nom) values('$prenom','$nom')";
    $fin=mysqli_query($variable,$sql);
      echo "données enregistrées avec succes";
 
 
?>
