<?php

$str="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$long=strlen($str);
for($i = 0 ; $i<$long ; $i += 2){
    echo $str[$i];
}