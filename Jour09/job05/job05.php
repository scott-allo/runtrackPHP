<?php

$pdo = new PDO("mysql:host=localhost;dbname=jour08;charset=utf8", "root", "");

$query = "SELECT * FROM etudiants WHERE DATE_ADD(naissance, INTERVAL 18 YEAR) > CURDATE()";
$result = $pdo->query($query);


echo "<table style='border: 1px solid black; border-collapse: collapse; width: 80%; margin: 20px auto; text-align: left;'>";
echo "<thead>
        <tr>";


$columns = array_keys($result->fetch(PDO::FETCH_ASSOC));
foreach ($columns as $column) {
    echo "<th style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($column) . "</th>";
}

echo "</tr>
      </thead>
      <tbody>";


$result->execute();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td style='border: 1px solid black; padding: 8px;'>" . htmlspecialchars($value) . "</td>";
    }
    echo "</tr>";
}

echo "</tbody>
    </table>";
?>
