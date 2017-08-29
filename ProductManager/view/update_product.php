<!DOCTYPE html>
<html>
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<div id="page">
    <?php

    // Get the product data
    $proId = $_GET['productID'];
    echo $proId;
    $categories = $_GET['categoryName'];
    echo $categories;
    $product_Code = $_GET['productCode'];
    echo $product_Code;
    $product_Name = $_GET['productName'];
    echo $product_Name;
    require_once ('../model/Product.php');
    require_once ('../model/Category.php');
    $category = new Category();
    $categoryName = $category->getSomeCategoryName($categories);
    $products = new Product();
    $product = $products->getProduct($proId);
    ?>
    <form action="../controller/update.php" method="post">

            <input type="hidden" name="product_id" value="<?php echo $proId?>">
        <p>
            Category_Name:
            <select name="category_name">
                <option ><?php echo $categories?></option>
                <?php
                foreach ($categoryName as $value):
                    ?>
                    <option><?php echo $value['categoryName']?></option>
                <?php endforeach;?>
            </select>
        </p>
        <p>
            Product_Code: <input type="text" name="product_code" value="<?php echo $product_Code?>">
        </p>
        <p>
            Product_Name: <input type="text" name="product_name" value="<?php echo $product_Name?>">
        </p>
        <p>
            <button type="submit" value="add">Update</button>
        </p>
    </form>
</div>
</body>
</html>