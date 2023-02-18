<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Titas');
define('DB_PASS', '123456');
define('DB_NAME', 'php_dev');

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection->connect_error){
    die('Connection Failed ' . $connection->connect_error);
}