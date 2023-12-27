<?php
include 'Database.php';
include 'Product.php';

$db = new Database();
$products = Product::getAllProducts($db->pdo);

foreach ($products as $product) {
    echo $product->display();
}
