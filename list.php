<?php
$user='kagna';
$pass='passer';
// $variable=mysqli_connect('localhost',$user,$pass,'student');
// $sql="select * from etud order by nom";
// $result=mysqli_query($variable,$sql);
// //print_r($result);
// $tab=mysqli_fetch_all($result, MYSQLI_ASSOC);
// echo gettype($result)."<br>";
// echo gettype($tab)."<br>";
// echo gettype($variable)."<br>";
// $_COOKIE["essai"]="diop";
//avec pdo
$variable=new PDO ("mysql:dbname=student;host=localhost",$user,$pass);
$sql="select * from etud order by nom";
$result=$variable->query($sql);
//print_r($result);
$tab=$result->fetchAll($variable::FETCH_ASSOC);//recuperer ts les valeur dans un tableau*/
//print_r($tab);
//apres on a fais avec foreach
?>
<center>
pour aller à l'accueil click <a href="affi.php">Ici</a>
  <table border='1px'>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
    </tr>
    <?php foreach($tab as $row) {?>
      <tr>
        <td class="id"><?=$row['id']?></td>
        <td class="prenom"><?=$row['nom']?></td>
        <td class="nom"><?=$row['prenom']?></td>
      </tr>
    <?php } ?>
  </table>
</center>