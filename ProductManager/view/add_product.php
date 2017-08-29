<!DOCTYPE html>
<html>
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<div id="page">
    <form action="../controller/Product.php" method="post">
    <p>
        Category_Name :
        <select name="category_name">
            <?php
            require_once ('../model/Category.php');
            $category = new Category();
            $categoryName = $category->getCategoryName();
            foreach ($categoryName as $value):
            ?>
                <option><?php echo $value['categoryName']?></option>
            <?php endforeach;?>
        </select>
    </p>
    <p>
        Product_Code: <input type="text" name="product_code">
    </p>
    <p>
        Product_Name: <input type="text" name="product_name">
    </p>
    <p>
        <button type="submit" value="add">Add</button>
    </p>
    </form>
</div>
</body>
</html>