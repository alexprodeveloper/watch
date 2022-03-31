<?php
require 'functions.php';

$link = mysqli_connect('localhost', 'root', '', 'products');
$categories = get_data($link, "SELECT * FROM products WHERE pid IS NULL;");
$title = 'Filter';
$header = get_component('header.php', []);
$content = get_component('banner.php', []) . get_component('filter.php', ['categories' => $categories]);
$footer = '';
$css = ['main.css', 'header.css', 'banner.css', 'filter.css', 'grid.css', 'text.css'];
$scripts = ['filter.js', 'main.js'];
print get_component('layout.php', [
    'title' => $title,
    'header' => $header,
    'footer' => $footer,
    'content' => $content,
    'css' => $css,
    'scripts' => $scripts,
]);
