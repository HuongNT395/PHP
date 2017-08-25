<!DOCTYPE html>
<html>
    <head>
        <title>My Guitar Shop</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>
    <body>
        <div id="page">
            <div id="main">
                <?php
                require_once ('../model/Product.php');
                $product = new Product();
                ?>
                <h1>Product List</h1>
                <div id="sidebar">
                    <a href="add_product.php">Thêm mới</a>
                    <table border="1">
                        <tr>
                            <th>productID</th>
                            <th>categoryID</th>
                            <th>productCode</th>
                            <th>productName</th>
                            <th colspan="2"></th>

                        </tr>
                        <?php

                        foreach ($product->getAnyProduct(1) as $value): ?>
                        <tr>
                            <td><?php echo $value['productID'];?></td>
                            <td><?php echo $value['categoryID'];?></td>
                            <td><?php echo $value['productCode'];?></td>
                            <td><?php echo $value['productName'];?></td>
                            <td><a href="#">Sửa</a></td>
                            <td><a href="#">Xóa</a></td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>