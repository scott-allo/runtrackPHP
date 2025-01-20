<?php

function bubblesort($tab, $croissant) {
    $n = count($tab);
    

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            // Comparer les éléments adjacents et les échanger si nécessaire
            if (($croissant && $tab[$j] > $tab[$j + 1]) || (!$croissant && $tab[$j] < $tab[$j + 1])) {
                // Échanger les éléments
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
    
    return $tab;
}


$tab = ["abc", "ghi", "def"];
$croissant = true; 
$tri_croissant = bubblesort($tab, $croissant);
echo "Tri croissant: " . implode(", ", $tri_croissant) . "\n";

$croissant = false; 
$tri_decroissant = bubblesort($tab, $croissant);
echo "Tri décroissant: " . implode(", ", $tri_decroissant) . "\n";

?>