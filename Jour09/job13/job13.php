<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour08;charset=utf8", "root", "");


$query = "SELECT salles.nom AS nom_salle, etage.nom AS nom_etage FROM salles INNER JOIN etage ON salles.id_etage = etage.id";
$result = $pdo->query($query);

echo "<table style='border: 1px solid black; border-collapse: collapse; width: 50%; margin: 20px auto; text-align: center;'>";
echo "<thead>
        <tr>
            <th style='border: 1px solid black; padding: 8px;'>Nom de la Salle</th>
            <th style='border: 1px solid black; padding: 8px;'>Nom de l'Étage</th>
        </tr>
      </thead>";
echo "<tbody>";


while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
            <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row['nom_salle']) . "</td>
            <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row['nom_etage']) . "</td>
          </tr>";
}

echo "</tbody>
    </table>";
?>
