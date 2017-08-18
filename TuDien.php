<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dictionary</title>
    <link rel="stylesheet" type="text/css" href="css/cssDictionary.css">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <fieldset>
        <legend>Từ điển Anh - Việt</legend>
        <input type="text" name="word" placeholder="Nhập từ cần tìm">
        <button type="submit" name="search">Translate</button>
        <input type="text" name="result" placeholder="">
    </fieldset>
</form>
</body>
<?php
$dictionary = array("hello"=>"Xin chào","how"=>"thế nào","book"=>"vở","cat"=>"con mèo");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchWord = $_POST["word"];
    $flag = 0;
    foreach ($dictionary as $word=>$result) {
        if($searchWord === $word) {
            echo '<script language="JavaScript">';
            echo 'document.getElementsByName("word")[0].value='.'"'.$searchWord.'";';
            echo 'document.getElementsByName("result")[0].value='.'"'.$result.'";';
            echo 'console.log("'.$result.'");';
            echo  '</script>';
            break;
        }  if($searchWord !== $word) {
            echo '<script language="JavaScript">';
            echo 'document.getElementsByName("word")[0].value='.'"'.$searchWord.'";';
            echo 'document.getElementsByName("result")[0].value = "Không tìm thấy";';
            echo  '</script>';
        }

    }
}

?>
</html>