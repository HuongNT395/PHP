<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>exam</title>
    <style>
        input[type=text]{
            width: 200px;
        }
        .colorText{
            color: red;
        }
    </style>
</head>
<body>
<?php
    $errorPhone = "";
    $errorEmail = "";
    $errorName = "";
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Registration</h2>
        <h4 class="colorText">*required field</h4>
        <h4>Name: <input type="text" name="name"><span class="colorText">* <?php echo $errorName ?></span></h4>
        <h4>Email: <input type="email" name="email"><span class="colorText">* <?php echo $errorEmail ?></span></h4>
        <h4>Phone: <input type="text" name="phone"><span class="colorText">* <?php echo $errorPhone ?></span></h4>
        <h4><button type="submit" name="submit">Submit</button></h4>
    </form>
</body>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $flag = true;

        if(empty($name)) {
            $errorName = "Ten dang nhap khong duoc de trong";
            $flag = false;
        }

        if(empty($email)) {
            $errorEmail = "Email khong duoc de trong";
            $flag =  false;
        } else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorEmail = "Dinh dang email sai";
                $flag = false;
            }
        }

        if(empty($phone)) {
            $errorPhone = "SDT khong duoc de trong";
            $flag = false;
        }
        function saveDataJSON($fileName, $name, $email, $phone) {
            $arr_data = array();
            try{
                $contact = array(
                    'name'=>$name,
                    'email'=>$email,
                    'phone'=>$phone
                );
                $jsondata = file_get_contents($fileName);
                $arr_data = json_decode($jsondata, true);
                array_push($arr_data, $contact);
                return true;
            } catch (Exception $e) {
                echo 'Error: '. $e->getMessage() ."\n";
                return false;
            }
        }

        if($flag == true) {
            if(saveDataJSON("users.json", $name, $email, $phone)){
                echo 'save successfull!!';
            } else {
                echo 'fail!!';
            }
        }
    }
?>
</html>