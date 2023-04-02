<?php
/*
Tri par sélection :
cet algorithme de tri sélectionne chaque élément du tableau un par 
un, et le place à sa position correcte dans le tableau trié en comparant
avec les autres éléments.
*/

function tri_selection($tab)
{
    for ($i = 0; $i < count($tab); $i++) {
        // Recherche de l'élément le plus petit
        $min = $i;
        for ($j = $i + 1; $j < count($tab); $j++) {
            if ($tab[$j] < $tab[$min]) {
                $min = $j;
            }
        }
        // Échange des éléments
        $tmp = $tab[$i];
        $tab[$i] = $tab[$min];
        $tab[$min] = $tmp;
    }
    return $tab;
}

// Exemple d'utilisation
$tab = array(4, 2, 7, 1, 3);
echo "tableau non trié: ";
foreach ($tab as $i)
    echo ($i." |");
    echo "<br>tableau  trié: ";
$tab = tri_selection($tab);
foreach ($tab as $i)
    echo ($i." |");

?>
