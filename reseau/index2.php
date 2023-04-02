<?php
/*$s=$_SERVER['SERVER_ADDR'];
echo $s;*/
$user='kagna';
$pass='passer';
 $variable=mysqli_connect('localhost',$user,$pass,'student');
 $sql="select * from etudiant";
 $result=mysqli_query($variable,$sql);
 $tab=mysqli_fetch_ALL($result);//recuperer ts les valeur dans un tableau*/
 for ($i=0;$i<4;$i++)
{echo "<li>";
    for ($j=0;$j<6;$j++)
{
    echo $tab[$i][$j].' ';
}
echo "</li>";
}
 /*for ($j=0;$j<6;$j++)

{
  
    while($tab=mysqli_fetch_all($result));
    {
    echo $tab[$i][$j].' ';
}
echo '</br>';
}
 //print_r ($tab);

/*while($tab=mysqli_fetch_row($result));
{
    echo "<tr>";
    echo "<td>".$tab[0]."</td><td>".$tab[1]."</td>";
    echo "</tr>";
}*/
?>