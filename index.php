<?php
require 'functions.php';

$link = mysqli_connect('localhost', 'root', '', 'products');
$products = get_data($link, "SELECT * FROM products;");
$title = 'Main page';
$header = get_component('header.php', []);
$content = get_component('banner.php', []) . get_component('text.php', []) . get_component('grid.php', [
       'products' => $products,
    ]);
$footer = '';
$css = ['main.css', 'header.css', 'banner.css', 'text.css', 'grid.css'];
$scripts = ['main.js'];
print get_component('layout.php', [
    'title' => $title,
    'header' => $header,
    'footer' => $footer,
    'content' => $content,
    'css' => $css,
    'scripts' => $scripts,
]);
