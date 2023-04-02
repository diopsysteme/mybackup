<?php
/*
Tri par fusion :
cet algorithme de tri utilise une approche de division et conquête
en divisant le tableau en deux parties, puis en triant chaque partie
séparément avant de les fusionner pour former un tableau trié complet.
*/

function echange(&$tab, $i, $j)
{
    if ($i != $j) {
        $temporaire = $tab[$i];
        $tab[$i] = $tab[$j];
        $tab[$j] = $temporaire;
    }
}


function tri_fusion(&$tab)
{
  $taille = count($tab);
  for ($i = 0; $i < $taille - 1; ++$i) {
     $i_min = $i;
     for ($j = $i+1; $j < $taille; ++$j)
        if ($tab[$j] < $tab[$i_min])
          $i_min = $j;
     echange($tab,$i,$i_min);
  }
}
 // exemple :
$tab = array(1,5,4,3,6);
echo "le tableau non trié: ";
foreach ($tab as $i)
    echo ($i."|");

tri_fusion($tab); // modifie le tableau $tab
echo "<br> le tableau  trié: ";
foreach ($tab as $i)
    echo ($i."|");
?>
