<?php

$booleanVar = true;
$intVar = 13;
$stringVar = "Hello, LA PLATEFORME!";
$floatVar = 1.3333;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des variables</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color:rgb(254, 200, 251);
        }
    </style>
</head>
<body>

    <h1>MON TABLEAU DES VARIABLES</h1>

    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>boolean</td>
                <td>$booleanVar</td>
                <td><?php echo $booleanVar ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td>integer</td>
                <td>$intVar</td>
                <td><?php echo $intVar; ?></td>
            </tr>
            <tr>
                <td>string</td>
                <td>$stringVar</td>
                <td><?php echo $stringVar; ?></td>
            </tr>
            <tr>
                <td>float</td>
                <td>$floatVar</td>
                <td><?php echo $floatVar; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>

