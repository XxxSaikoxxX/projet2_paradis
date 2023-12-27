<?php
include 'Database.php';
include 'User.php';

$db = new Database();
$user = new User($db->pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user->register($_POST['email'], $_POST['password'], $_POST['username'], $_POST['fname'], $_POST['lname']);
    header("Location: welcome.php"); // Redirige vers une page de bienvenue après l'inscription
    exit;
}
