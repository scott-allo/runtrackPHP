<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour08;charset=utf8", "root", "");

$query = "SELECT SUM(capacite) AS capacite_totale FROM salles";
$result = $pdo->query($query);


echo "<table style='border: 1px solid black; border-collapse: collapse; width: 50%; margin: 20px auto; text-align: center;'>";
echo "<thead>
        <tr>
            <th style='border: 1px solid black; padding: 8px;'>Capacite totale</th>
        </tr>
      </thead>";
echo "<tbody>";


$row = $result->fetch(PDO::FETCH_ASSOC);
echo "<tr>
        <td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($row['capacite_totale']) . "</td>
      </tr>";

echo "</tbody>
    </table>";
?>
