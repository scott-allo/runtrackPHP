<?php
if (isset($_COOKIE['prenom'])) {
    if (isset($_POST['deco'])) {
        setcookie('prenom', '', time() - 3600, '/');
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
    echo "Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !";
    echo '<form method="post">
            <button type="submit" name="deco">Déconnexion</button>
          </form>';
} else {
    if (isset($_POST['connexion']) && isset($_POST['prenom'])) {
        setcookie('prenom', $_POST['prenom'], time() + 3600, '/');
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
    echo '<form method="post">
            <input type="text" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
          </form>';
}
?>
