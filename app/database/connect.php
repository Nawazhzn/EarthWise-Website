<?php

$host = '68.65.122.49';
$user = 'digisvll_user';
$pass = '';
$db_name = 'digisvll_earthwise';


$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect-error) {
    die('Database connection error: ' . $conn->connect_error);
}