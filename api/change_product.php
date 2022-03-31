<?php
require '../functions.php';
$link = mysqli_connect('localhost', 'root', '', 'products');
if (isset($_GET['id']) && isset($_GET['field']) && isset($_GET['value'])) {
   $product_to_update = get_data_one($link, "SELECT * FROM products where id =" . intval($_GET['id']));
   if ($product_to_update) {
       $field = $_GET['field'];
       $value = $_GET['value'];
       $id = intval($_GET['id']);
       $tr = mysqli_query($link, "UPDATE products SET $field = '$value' WHERE id = $id");
       print_r($tr) ;
   }
}