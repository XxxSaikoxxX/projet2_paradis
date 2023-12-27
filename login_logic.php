<?php
include 'Database.php';
include 'User.php';

$db = new Database();
$user = new User($db->pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($user->login($_POST['email'], $_POST['password'])) {
        header("Location: dashboard.php"); // Redirige vers le tableau de bord après la connexion
        exit;
    } else {
        echo "<p>Échec de la connexion. Veuillez réessayer.</p>";
    }
}
