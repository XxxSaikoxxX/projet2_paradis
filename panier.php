<?php
include 'Database.php';
include 'Cart.php';

$db = new Database();
$cart = new Cart();

if (isset($_POST['addProduct'])) {
    $cart->addProduct($_POST['productId'], $db->pdo);
    echo "<p>Produit ajouté au panier. <a href='checkout.php'>Voir le panier</a></p>";
}

echo $cart->displayCart();
