<!DOCTYPE html>
<html>
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
<div id="page">
    <form action="Product.php" method="post">
    <p>
        Category_Id :
        <select name="category_id">
            <?php
            require_once ('../model/Category.php');
            $category = new Category();
            $categoryId = $category->getCategoryId();
            foreach ($categoryId as $value):
            ?>
                <option><?php echo $value['categoryId']?></option>
            <?php endforeach;?>
        </select>
    </p>
    <p>
        Product_Code: <input type="text" name="product_code">
    </p>
    <p>
        Product_Code: <input type="text" name="product_name">
    </p>
    <p>
        <button type="submit" value="add">Add</button>
    </p>
    </form>
</div>
</body>
</html>