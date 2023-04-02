<center> <a href="insert.php">ajouter</a> <a href="list.php">lister</a> 
</center>
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
$sql="select * from etud ";
$result=$variable->query($sql);
//print_r($result);
$tab=$result->fetchAll($variable::FETCH_ASSOC);//recuperer ts les valeur dans un tableau
//print_r($tab);
//apres on a fais avec foreach
?>
<center>
  <table border='1px'>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
    <?php foreach($tab as $row) {?>
      <tr>
        <td class="id"><?=$row['id']?></td>
        <td class="prenom"><?=$row['nom']?></td>
        <td class="nom"><?=$row['prenom']?></td>
        <td><a href="update.php?id=<?=$row['id']?>">modifier</a></td>
        <td><button class='delete' value="<?=$row['id']?>">supprimer</button></td>
      </tr>
    <?php } ?>
  </table>
</center>
<script>
  deletes = document.querySelectorAll('.delete');
  deletes.forEach(dele => {
    dele.addEventListener('click', () => {
      let deles = dele.value;
$.ajax({
  type: "POST",
  url: "delete.php",
  data: { val: deles },
  success: function(data) {
    location.reload()
  }
});
    })
  })



</script>
<script src="jquery.js"></script>
