<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour08;charset=utf8", "root", "");


$query = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";
$result = $pdo->query($query);


echo "<table style='border: 1px solid black; border-collapse: collapse; width: 60%; margin: 20px auto; text-align: left;'>";
echo "<thead>
        <tr>
            <th style='border: 1px solid black; padding: 8px;'>Prénom</th>
            <th style='border: 1px solid black; padding: 8px;'>Nom</th>
            <th style='border: 1px solid black; padding: 8px;'> Naissance</th>
        </tr>
      </thead>";
echo "<tbody>";

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row['prenom']) . "</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row['nom']) . "</td>";
    echo "<td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row['naissance']) . "</td>";
    echo "</tr>";
}

echo "</tbody></table>";
?>
