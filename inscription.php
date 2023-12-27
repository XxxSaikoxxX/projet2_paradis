<?php
include 'Database.php';
include 'User.php';

$db = new Database();
$user = new User($db->pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user->register($_POST['email'], $_POST['password'], $_POST['username'], $_POST['fname'], $_POST['lname']);
    echo "<p>Inscription réussie. <a href='login.php'>Se connecter</a></p>";
}
?>
<form method="post">
    <!-- Champs du formulaire d'inscription -->
    <input type="submit" value="S'inscrire">
</form>
