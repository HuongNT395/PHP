<?php
require ('ConnectDB.php');
class Product
{
    function getAnyProduct($category_Id) {
        $db = new ConnectDB();
        $query = "SELECT * FROM products WHERE categoryID=$category_Id";
        $conn = $db->connect();
        $products = $conn->query($query);
        return $products;
    }

    function  addProduct($categoryId, $productCode, $productName) {
        $db = new ConnectDB();
        $query = "INSERT INTO products(categoryID, productCode, productName)
                  values('".$categoryId."','".$productCode."','".$productName."')";
        $conn = $db->connect();
        $conn->exec($query);
    }
}