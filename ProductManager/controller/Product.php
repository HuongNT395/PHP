<?php
// Get the product data
$category_name = $_POST['category_name'];
$code = $_POST['product_code'];
$name = $_POST['product_name'];

// Validate inputs
    // If valid, add the product to the database
    require_once('../model/Product.php');
    $add = new Product();
    $add->addProduct($category_name, $code, $name);

    // Display the Product List page
    include('../view/Product.php');
?>