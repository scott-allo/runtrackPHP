<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$decal = "";
$i = 0;

while (isset($str[$i])) {
    $i++;
}

for ($j = 0; $j < $i - 1; $j++) {
    $decal .= $str[$j + 1]; 
}

$decal .= $str[0];

echo $decal;
?>
