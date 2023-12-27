<?php
include 'Database.php';
include 'User.php';

$db = new Database();
$user = new User($db->pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($user->login($_POST['email'], $_POST['password'])) {
        echo "<p>Connexion réussie. Redirection...</p>";
        header("Location: index.php"); // Rediriger vers la page d'accueil
        exit;
    } else {
        echo "<p>Échec de la connexion. Veuillez réessayer.</p>";
    }
}
?>
<form method="post">
    <!-- Champs du formulaire de connexion -->
    <input type="submit" value="Se connecter">
</form>
