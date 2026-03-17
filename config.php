<?php

$host = "localhost";
$db   = "db_resendetech";
$user = "app_resende";
$pass = "fundao";


$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>