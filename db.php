<?php
$host = "localhost";
$username = "root";
$password = "mysql";
$dbname = "posts";

$connection = mysqli_connect($host, $username, $password, $dbname);


if (!$connection) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
?>