<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Customer Infomation</title>
        <link rel="stylesheet" type="text/css" href="css/cssCustomers.css">
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <fieldset>
                from: <input type="text" name="from" placeholder="yyyy-mm-dd">
                to:  <input type="text" name="to" placeholder="yyyy-mm-dd">
                <button type="submit" name="search">Search</button>
            </fieldset>
        </form>
        <table border="1">
            <caption><h1>Danh sách khách hàng</h1></caption>
            <tr>
                <th>Key</th>
                <th>Name</th>
                <th>Date of birth</th>
                <th>Address</th>
                <th>Image</th>
            </tr>
            <?php
            $customerList = array(
                "1" => array("ten"=>"Mai Văn Hoàn",
                    "ngaysinh"=>"1983-08-20",
                    "diachi"=>"Hà Nội",
                    "anh"=>"anh1"),
                "2" => array("ten"=>"Mai Văn Hoàn",
                    "ngaysinh"=>"1983-08-25",
                    "diachi"=>"Hà Nội",
                    "anh"=>"anh1"),
                "3" => array("ten"=>"Mai Văn Hoàn",
                    "ngaysinh"=>"1983-08-27",
                    "diachi"=>"Hà Nội",
                    "anh"=>"anh1"),
                "4" => array("ten"=>"Mai Văn Hoàn",
                    "ngaysinh"=>"1995-08-20",
                    "diachi"=>"Hà Nội",
                    "anh"=>"anh1"),
                "5" => array("ten"=>"Mai Văn Hoàn",
                    "ngaysinh"=>"1993-08-20",
                    "diachi"=>"Hà Nội",
                    "anh"=>"anh1"),
            );
//            function search($fromDate, $toDate, $customerList) {
//                $resultSearch = array();
//                for($i = 1; $i <= count($customerList); $i++) {
//                    $key = $customerList["'".$i."'"];
//                    $date = $key['ngaysinh'];
//                    echo $date;
//                    if($date >= $fromDate && $date <= $toDate) {
//                        array_push($resultSearch, $key);
//                    }
//                }
//                return $resultSearch;
//            }

//            if($_SERVER["REQUEST_METHOD"] == "POST") {
//                $from = $_POST["from"];
//                $to = $_POST["to"];
//                $list = search($from, $to, $customerList);
//                print_r($list);
                foreach ($customerList as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $key . "</td>";
                    echo "<td>" . $value['ten'] . "</td>";
                    echo "<td>" . $value['ngaysinh'] . "</td>";
                    echo "<td>" . $value['diachi'] . "</td>";
                    echo "<td><img src='images/bosslanuphu.jpg' width='60px' height='60px' alt='anh1'></td>";
                    echo "</tr>";
//                }
            }
            ?>
        </table>
    </body>
    <?php

    ?>
</html>