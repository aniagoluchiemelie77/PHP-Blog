<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$host = 'localhost';
$user = $_ENV['DATABASE_USER'];
$pass = $_ENV['DATABASE_PASSWORD'];
$db = $_ENV['DATABASE_NAME'];
$conn = new mysqli($host, $user, $pass, $db);
if($conn->connect_error){
    die("Connection failed. Please try again later.");
}; 
?>