<?php

/**
 * Created by PhpStorm.
 * User: kabi1
 * Date: 24/8/2017
 * Time: 09:42 AM
 */
class ConnectDB
{
    private  $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    private $username = 'huongnt';
    private $password = '123456';

    function connect() {
        try {
            global $conn;
            $conn = new PDO($this->dsn, $this->username, $this->password);
//            echo 'connect successfully';
            return $conn;
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo 'Error: '.$error;
        }
    }
}