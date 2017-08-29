<?php
require_once ('../model/Category.php');
$category_name = $_POST['category_name'];
//echo $category_name;
$code = $_POST['product_code'];
$name = $_POST['product_name'];
$productId = $_POST['product_id'];
//echo $productId;
// Validate inputs
// If valid, add the product to the database
require_once ('../model/Product.php');
$add = new Product();
$add->updateProduct($productId,$category_name, $code, $name);

// Display the Product List page
include('../view/Product.php');
?>