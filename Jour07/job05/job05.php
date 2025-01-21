<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 1.2rem;
            cursor: pointer;
        }
        .message {
            text-align: center;
            margin: 20px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <?php
    session_start();

    // Initialisation de la grille et des variables de session
    if (!isset($_SESSION['board'])) {
        $_SESSION['board'] = [
            ['-', '-', '-'],
            ['-', '-', '-'],
            ['-', '-', '-']
        ];
        $_SESSION['current_player'] = 'X';
        $_SESSION['winner'] = null;
    }

    // Fonction pour vérifier si un joueur a gagné
    function checkWinner($board)
    {
        // Vérifie les lignes, les colonnes et les diagonales
        for ($i = 0; $i < 3; $i++) {
            if ($board[$i][0] !== '-' && $board[$i][0] === $board[$i][1] && $board[$i][1] === $board[$i][2]) {
                return $board[$i][0];
            }
            if ($board[0][$i] !== '-' && $board[0][$i] === $board[1][$i] && $board[1][$i] === $board[2][$i]) {
                return $board[0][$i];
            }
        }
        if ($board[0][0] !== '-' && $board[0][0] === $board[1][1] && $board[1][1] === $board[2][2]) {
            return $board[0][0];
        }
        if ($board[0][2] !== '-' && $board[0][2] === $board[1][1] && $board[1][1] === $board[2][0]) {
            return $board[0][2];
        }
        return null;
    }

    // Gestion du clic sur une case
    if (isset($_POST['cell'])) {
        $cell = $_POST['cell'];
        $row = intval($cell[0]);
        $col = intval($cell[1]);

        if ($_SESSION['board'][$row][$col] === '-' && !$_SESSION['winner']) {
            $_SESSION['board'][$row][$col] = $_SESSION['current_player'];
            $_SESSION['winner'] = checkWinner($_SESSION['board']);

            if (!$_SESSION['winner']) {
                // Change le joueur courant
                $_SESSION['current_player'] = $_SESSION['current_player'] === 'X' ? 'O' : 'X';
            }
        }
    }

    // Vérifie le match nul
    $isDraw = true;
    foreach ($_SESSION['board'] as $row) {
        if (in_array('-', $row)) {
            $isDraw = false;
            break;
        }
    }

    if ($isDraw && !$_SESSION['winner']) {
        $_SESSION['winner'] = 'Draw';
    }

    // Réinitialisation de la partie
    if (isset($_POST['reset'])) {
        $_SESSION['board'] = [
            ['-', '-', '-'],
            ['-', '-', '-'],
            ['-', '-', '-']
        ];
        $_SESSION['current_player'] = 'X';
        $_SESSION['winner'] = null;
    }
    ?>

    <div class="message">
        <?php
        if ($_SESSION['winner'] === 'Draw') {
            echo "Match nul !";
        } elseif ($_SESSION['winner']) {
            echo $_SESSION['winner'] . " a gagné !";
        } else {
            echo "C'est au tour de : " . $_SESSION['current_player'];
        }
        ?>
    </div>

    <form method="POST">
        <table border="1">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <?php if ($_SESSION['board'][$i][$j] === '-'): ?>
                                <button type="submit" name="cell" value="<?php echo $i . $j; ?>">-</button>
                            <?php else: ?>
                                <?php echo $_SESSION['board'][$i][$j]; ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <div style="text-align: center;">
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </div>
    </form>
</body>
</html>
