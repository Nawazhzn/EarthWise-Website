<?php

$host = 'freedb.tech';
$user = 'freedbtech_webassig';
$pass = 'webassig';
$db_name = 'freedbtech_webassig';


$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
} 