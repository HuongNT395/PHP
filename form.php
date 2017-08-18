<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/cssForm.css">
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <fieldset>
                <legend>Login</legend>
                <input type="text" name="userName" placeholder="username"><br>
                <input type="text" name="password" placeholder="password"><br>
                <button type="submit" name="signIn">Sign In</button>
            </fieldset>
        </form>
    </body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        if ($userName == "admin" && $password == "admin") {
            echo "<h2>Welcome <span style='color: red'>" .$userName. "</span> to website</h2>";
        } else{
            echo "<h2><span style='color: red'>Login Error</span></h2>";
        }
    }
    ?>
</html>