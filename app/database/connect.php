<?php

$host = 'server165.web-hosting.com';
$user = 'digisvll_earthwiseu';
$pass = 'W6naYX3cLRA0';
$db_name = 'digisvll_earthwise';


$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
} 