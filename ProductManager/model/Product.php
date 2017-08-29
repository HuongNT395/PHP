<?php
require_once ('ConnectDB.php');
require_once ('Category.php');
class Product
{
    function getAnyProduct() {
        $db = new ConnectDB();
        $query = "SELECT productID, categoryName, productName, productCode FROM products prd JOIN categories ctg ON ctg.categoryID = prd.categoryID";
        $conn = $db->connect();
        $products = $conn->query($query);
        return $products;
    }

    function getProduct($productId) {
        $db = new ConnectDB();
        $query = "SELECT * FROM products WHERE productId=$productId";
        $conn = $db->connect();
        $products = $conn->query($query);
        return $products;
    }

    function  addProduct($categoryName, $productCode, $productName) {
        $db = new ConnectDB();
        $category = new Category();
        $categoryIds = $category->getCategoryId($categoryName);
        $categoryId = (int) $categoryIds->fetch();
        $query = "INSERT INTO products(categoryId, productCode, productName)
                  values($categoryId,'".$productCode."','".$productName."')";
//        echo $query;
        $conn = $db->connect();
        $conn->exec($query);
    }

    function  updateProduct($productId, $categoryName, $productCode, $productName) {
        $db = new ConnectDB();
        $category = new Category();
        $categoryIds = $category->getCategoryId($categoryName);
        $categoryId = (int) $categoryIds->fetch();
        $query = "UPDATE products SET categoryID = $categoryId, productCode = '".$productCode."', productName = '".$productName."' WHERE products.productID = $productId;";
        echo $query;
        $conn = $db->connect();
        $conn->exec($query);
    }

    function deleteProduct($productId) {
        $db = new ConnectDB();
        $query = "DELETE FROM products WHERE productId=$productId";
        $conn = $db->connect();
        $conn->exec($query);
    }

}