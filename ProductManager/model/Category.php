<?php
require ('ConnectDB.php');
class Category
{
    function getCategoryId() {
        $db = new ConnectDB();
        $query = "SELECT categoryId FROM categories";
        $conn = $db->connect();
        $category = $conn->query($query);
        return $category;
    }

}