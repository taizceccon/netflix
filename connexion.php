<?php
session_start();
include 'db.php';
include 'header.php';
?>

<h1>Connexion</h1>
<form method="POST">
    Login: <input type="text" name="login" required><br><br>
    Mot de passe: <input type="password" name="password" required><br><br>
    <button type="submit">Se connecter</button>
</form>

<?php
if ($_POST) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM user WHERE login = ?");
    $stmt->execute([$login]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        header("Location: admin.php");
        exit;
    } else {
        echo "Identifiants incorrects.";
    }
}
include 'footer.php';
?>