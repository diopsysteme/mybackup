<?php
$user='kagna';
$pass='passer';
$variable=mysqli_connect('localhost',$user,$pass,'student');
$sql="select * from tp ";
$result=mysqli_query($variable,$sql);
//print_r($result);
$tab=mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<center>
  <table border='1px'>
    <tr>
      <th>URL</th>
      <th>Nom</th>
      <th>Description</th>
    </tr>
    <?php foreach($tab as $row) {?>
      <tr>
        <td><?=$row['url']?></td>
        <td><?=$row['nom']?></td>
        <td><?=$row['description']?></td>
      </tr>
    <?php } ?>
  </table>
</center>