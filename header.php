<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); 
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>NetFlix</title>
</head>
<body>
<header>
    <a href="index.php">
        <img src="image/netflix.png" alt="Bienvenue sur Netflix" width="175">
    </a>
</header>
<nav>
    <a href="index.php">Accueil</a>
    <a href="films.php">Consulter tous les films</a>
    <?php if (isset($_SESSION['user'])): ?>
        <a href="admin.php">Espace Admin</a>
        <a href="deconnexion.php">Se déconnecter</a>
    <?php else: ?>
        <a href="inscription.php">Inscription</a>
        <a href="connexion.php">Connexion</a>
    <?php endif; ?>
</nav>