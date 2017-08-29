<!DOCTYPE html>
<html>
    <head>
        <title>My Guitar Shop</title>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
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
                    <a href="../view/add_product.php">Thêm mới</a>
                    <table border="1">
                        <tr>
                            <th>productID</th>
                            <th>categoryName</th>
                            <th>productCode</th>
                            <th>productName</th>
                            <th colspan="2"></th>

                        </tr>
                        <?php

                        foreach ($product->getAnyProduct() as $value): ?>
                        <tr>
                            <td><?php echo $value['productID'];?></td>
                            <td><?php echo $value['categoryName'];?></td>
                            <td><?php echo $value['productCode'];?></td>
                            <td><?php echo $value['productName'];?></td>
                            <td><a href="../view/update_product.php?productID=<?php echo $value['productID'];?>&categoryName=<?php echo $value['categoryName']?>&productCode=<?php echo $value['productCode']?>&productName=<?php echo $value['productName']?>">Sửa</a></td>
<!--                            <td><a href="../view/delete.php?productID=--><?php //echo $value['productID'];?><!--">Xóa</a></td>-->
                            <td><a onclick="Delete(<?php echo $value['productID'];?>)">Xóa</a></td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                </div>
            </div>
        </div>
    <script type="text/javascript">
        function Delete(proId) {
            var result = confirm("Bạn chắc chắn xóa sản phẩm này?");
            console.log(result);
            if(result){
                window.location = "../controller/delete.php?productId="+proId+"";
            }
        }
    </script>
    </body>
</html>