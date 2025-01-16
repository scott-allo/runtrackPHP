<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire POST</title>
</head>
<body>

    <form action="" method="POST">
        <label for="arg1">Argument 1:</label>
        <input type="text" name="arg1" id="arg1"><br>

        <label for="arg2">Argument 2:</label>
        <input type="text" name="arg2" id="arg2"><br>

        <label for="arg3">Argument 3:</label>
        <input type="text" name="arg3" id="arg3"><br>

        <button type="submit">Envoyer</button>
    </form>

    <?php
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
        if (isset($_POST)) {
            $count = 0; 

           
            foreach ($_POST as $key => $value) {
                if (isset($value)) {
                    $count++; 
                }
            }

            echo "<p>Nombre d'arguments reçus via POST : <strong>$count</strong></p>";
        } else {
            echo "<p>Aucun argument reçu.</p>";
        }
    }
    ?>
</body>
</html>
