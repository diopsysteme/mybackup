<?php
/*
Tri à bulle :
c'est de la comparaison élément par 
élément en réduisant à chaque fois l'intervalle de tri.C'est à 
dire qu'au début on parcourt tout le tableau,on déplace l'élément
le plus grand vers la droite (ou le plus petit en fonction du type de tri),
si il y a une inversion (le tableau n'est donc pas trié), sinon,
on peut s'arrêter. 
*/


function tribulle($tab) {
  $n = count($tab);
  for($i=0;$i<$n-1;$i++) {
      for($j=0;$j<$n-$i-1;$j++) {
          if($tab[$j] > $tab[$j+1]) {
              $temp = $tab[$j];
              $tab[$j] = $tab[$j+1];
              $tab[$j+1] = $temp;
          }
      }
  }
  return $tab;
}

// Exemple d'utilisation
$tab = array(14, 5, 0, 4, 102, 8, 6);
echo "Le tableau non trié est : ";
for($i=0;$i<count($tab);$i++) 
  echo $tab[$i] . "|";
$tab2 = tribulle($tab);
echo "<br> Le tableau trié est : ";
for($i=0;$i<count($tab);$i++) 
  echo $tab2[$i] . "|";


?>
