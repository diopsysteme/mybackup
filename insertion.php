<?php
/*
Tri par insertion :
cet algorithme de tri fonctionne en comparant chaque élément du 
tableau avec les éléments déjà triés, et en l'insérant à sa
position correcte dans le tableau trié.
*/

function tri_insertion($tab) {
    for ($i = 1; $i < count($tab); $i++) {
      $current = $tab[$i];
      $j = $i - 1;
      while ($j >= 0 && $current < $tab[$j]) {
        $tab[$j + 1] = $tab[$j];
        $j--;
      }
      $tab[$j + 1] = $current;
    }
    return $tab;
  }  
$tab = array(11,8,5,6,7,1,4,2,10);

echo "le tableau non trié: ";
foreach ($tab as $i)
    echo ($i." | ");
$tab = tri_insertion($tab);
echo '<br>le tableau trié: ';
foreach ($tab as $i)
    echo ($i." |");
?>