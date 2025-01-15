<?php

$str="I'm sorry Dave I'm afraid I can't do that.";
$long=strlen($str);


for($i = 0 ; $i<$long ; $i ++){
    $voy= strtolower($str[$i]); 
    if($voy== "a"||$voy=="e"||$voy=="i"||$voy=="o"||$voy=="u"||$voy=="y"){
    echo $str[$i];
    }
}






