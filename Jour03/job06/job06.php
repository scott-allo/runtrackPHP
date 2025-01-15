<?php

$str = "Les choses que l on Possede finissent par nous posseder.";
$reversedStr = "";
$i = 0;

while (isset($str[$i])) {
    $i++;
}

for ($i--; $i >= 0; $i--) {
    $reversedStr .= $str[$i];
}

echo $reversedStr;
?>

