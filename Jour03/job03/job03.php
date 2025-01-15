<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";
$i = 0;

while (isset($str[$i])) {
    $voy = $str[$i]; 
    
  
    if ($voy == "a" || $voy == "e" || $voy == "i" || $voy == "o" || $voy == "u" || $voy == "y" || 
        $voy == "A" || $voy == "E" || $voy == "I" || $voy == "O" || $voy == "U" || $voy == "Y") {
        echo $str[$i];  
    }
    
    $i++; 
}
?>





