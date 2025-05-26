<?php
include 'db.php';
include 'header.php';
?>

<h1>Bienvenue sur <span>Netflix</span> !</h1>
<p>La meilleure plateforme de streaming pour découvrir vos films préférés.</p>

<h2>Les 5 derniers films ajoutés :</h2>

<div class="container-films">
<?php
$stmt = $pdo->query("SELECT * FROM film ORDER BY id DESC LIMIT 5");
while ($film = $stmt->fetch()) {
    echo "<div class='film-card'><a href='film.php?id=" . $film['id'] . "' class='film-card-link'>
            <h3>" . strtoupper(htmlspecialchars($film['title'])) . "</a></h3>
            <a href='film.php?id=" . $film['id'] . "' class='film-card-link'>
            <img src='uploads/" . htmlspecialchars($film['urlphoto']) . "' alt='Affiche du film'></a>
          </div>";
}
?>
</div>

<?php include 'footer.php'; ?>
