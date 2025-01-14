<?php

$nombre = 0;

while($nombre <= 100){
    if($nombre%3==0 && $nombre%5==0){
        echo "FizzBuzz<br>";
    }
    elseif($nombre%3==0){
        echo "Buzz<br>";
    }
    elseif($nombre%5==0){
        echo "Fizz<br>";
    }
    else{
        echo"$nombre<br>";
    }

    
    $nombre ++ ;
}
        
