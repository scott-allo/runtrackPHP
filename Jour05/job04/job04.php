<?php

function calcule($nombre1, $operation, $nombre2) {
    
    if ($operation == '+') {
        return $nombre1 + $nombre2;

    } elseif ($operation == '-') {
        return $nombre1 - $nombre2;

    } elseif ($operation == '*') {
        return $nombre1 * $nombre2;

    } elseif ($operation == '/') {
        return $nombre1 / $nombre2;

    } elseif ($operation == '%') {
        return $nombre1 % $nombre2;
    }
}


$operation = calcule(23, '/', 3);
if (isset($operation)) {
    echo "Résultat : " . $operation . "\n";
}

