<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "web_developer_registration";
$dsn = "mysql:host={$host};dbname={$dbname}";

$pdo = new PDO($dsn, $user, password: $password);

?>