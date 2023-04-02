<?php
/*
Le tri à peigne (ou comb sort en anglais) est un algorithme de tri
qui améliore le tri à bulles. Comme le tri à bulles, il compare des
éléments voisins et échange ceux qui sont dans le mauvais ordre.
*/

function tri_peigne($tab) {
    $n = count($tab);
    $facteur = 1.3;
    $echange = true;
    $i = 0;

    while ($echange || $facteur > 1) {
        $echange = false;
        $limite = $n - round($facteur);
        for ($i = 0; $i < $limite; $i++) {
            if ($tab[$i] > $tab[$i + round($facteur)]) {
                list($tab[$i], $tab[$i + round($facteur)]) = array($tab[$i + round($facteur)], $tab[$i]);
                $echange = true;
            }
        }
        if ($facteur > 1) {
            $facteur /= 1.3;
        }
    }
    return $tab;
}

$tab = array(64, 34, 25, 12, 22, 11, 90);
echo "le tableau non trié: ";
foreach ($tab as $i)
    echo ($i."|");
$tab2 = tri_peigne($tab);
echo "<br> le tableau  trié: ";
foreach ($tab2 as $i)
    echo ($i."|");
?>