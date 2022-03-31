<?php
require 'functions.php';

$link = mysqli_connect('localhost', 'root', '', 'products');
$product = get_data_one($link, "SELECT * FROM products where id =" . $_GET['id']);
$title = 'Product';
$header = get_component('header.php', []);
$content = get_component('product.php', [
    'product' => $product,
]);
$footer = '';
$css = ['main.css', 'header.css', 'product.css'];
$scripts = ['product.js', 'main.js'];
print get_component('layout.php', [
    'title' => $title,
    'header' => $header,
    'footer' => $footer,
    'content' => $content,
    'css' => $css,
    'scripts' => $scripts,
]);