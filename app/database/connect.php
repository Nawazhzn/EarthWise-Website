<?php

$host = 'sql6.freemysqlhosting.net';
$user = 'sql6417958';
$pass = 'RjTSlN41yB';
$db_name = 'sql6417958';


$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Database connection error: ' . $conn->connect_error);
}