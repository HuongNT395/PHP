<?php
require_once ('../model/Product.php');
$productId = $_GET['productId'];
$product = new Product();
$product->deleteProduct($productId);

include ('../view/Product.php');
?>