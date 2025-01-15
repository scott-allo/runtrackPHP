<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$decal = "";
$length = strlen($str);
for ($i = 0; $i < $length - 1; $i++) {
    $decal .= $str[$i + 1]; 
}
$decal .= $str[0];

echo $decal;

