<?php

$str = "On nest pas le meilleur quand on le croit mais quand on le sait";

$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

$voyelles = "aeiouyAEIOUY";
$consonnes = "bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ";

for ($i = 0; isset($str[$i]); $i++) {
    $char = $str[$i];


    $is_vowel = false;
    for ($j = 0; isset($voyelles[$j]); $j++) {
        if ($char == $voyelles[$j]) {
            $is_vowel = true;
            break;
        }
    }


    $is_consonant = false;
    for ($j = 0; isset($consonnes[$j]); $j++) {
        if ($char == $consonnes[$j]) {
            $is_consonant = true;
            break;
        }
    }

    if ($is_vowel) {
        $dic["voyelles"]++;
    } elseif ($is_consonant) {
        $dic["consonnes"]++;
    }
}

echo "<table border='1'>";
echo "<tr><th>Voyelles</th><th>Consonnes</th></tr>";
echo "<tr><td>{$dic['voyelles']}</td><td>{$dic['consonnes']}</td></tr>";
echo "</table>";
?>
