<?php
require '../functions.php';
$link = mysqli_connect('localhost', 'root', '', 'products');

if (isset($_GET['pid']) && $_GET['pid']) {
    $id = intval($_GET['pid']);
    $products = get_data($link, "SELECT * FROM products where pid = $id");
} else {
    $products = get_data($link, "SELECT * FROM products");
}

print get_component('grid.php', [
    'products' => $products,
]);
