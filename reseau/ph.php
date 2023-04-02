<?php
     $prenom = $_POST['prenom']; 
     $nom = $_POST['nom'];
     $password = $_POST['password'];
     $mail = $_POST['mail'];
     $num = $_POST['numero'];
    
     /*echo '<h3>Informations récupérées </h3>'; 
     echo 'prenom : ' . $_POST['prenom'] . '</br> nom : ' .$_POST['nom']. ' </br>numero: ' . $_POST['numero']. '</br> mail: '. $_POST['mail']; 
     */
      $variable=mysqli_connect('localhost','kagna','passer','student');
      $sql="insert into etudiant(prenom,nom,numero,mail,passwd) values('$prenom','$nom',$num,'$mail','$password')";
      $fin=mysqli_query($variable,$sql);
      echo "données enregistrées avec succes";
 
 
?>