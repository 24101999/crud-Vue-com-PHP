<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");

header("Access-Control-Allow-Methods", "GET, POST, OPTIONS, PUT, DELETE");

header("Access-Control-Allow-Headers: X-Requested-With");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$host = 'localhost';
$db = 'user';
$name = 'root';
$pass = '';

$conn = new PDO("mysql:host=$host;dbname=$db", $name, $pass);
