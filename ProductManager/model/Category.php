<?php
require_once ('ConnectDB.php');
class Category
{
    function getCategoryName() {
        $db = new ConnectDB();
        $query = "SELECT categoryName FROM categories";
        $conn = $db->connect();
        $category = $conn->query($query);
        return $category;
    }

    function getSomeCategory($categoryId) {
        $db = new ConnectDB();
        $query = "SELECT categoryId FROM categories WHERE categoryId NOT IN ($categoryId)";
        $conn = $db->connect();
        $category = $conn->query($query);
        return $category;
    }

    function getSomeCategoryName($categoryName) {
        $db = new ConnectDB();
        $query = "SELECT categoryName FROM categories WHERE categoryName NOT IN ('".$categoryName."')";
        $conn = $db->connect();
        $category = $conn->query($query);
        return $category;
    }

    function getCategoryId($categoryName) {
        $db = new ConnectDB();
        $query = "SELECT categoryID FROM categories WHERE categoryName='".$categoryName."'";
        $conn = $db->connect();
        $category = $conn->query($query);
        return $category;
    }

}