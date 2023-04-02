<?php
$user='kagna';
$pass='passer';
 $variable=mysqli_connect('localhost',$user,$pass,'student');
 $sql="select * from etude";
 $result=mysqli_query($variable,$sql);
 $tab=mysqli_fetch_all($result,MYSQLI_ASSOC);//recuperer ts les valeur dans un tableau*/
 //print_r($tab);
 $json=json_encode($tab,true);
 echo $json;

?>
