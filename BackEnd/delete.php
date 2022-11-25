<?php
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE");

header("Access-Control-Allow-Methods", "GET, POST, OPTIONS, PUT, DELETE");

header("Access-Control-Allow-Headers: X-Requested-With");

header("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE, OPTIONS");

require_once('./banco.php');

$id = $_GET['id'];

$delete = $conn->prepare("DELETE FROM usuario  WHERE id = $id");

if ($id) {

    $delete->execute();

    header("location: http://127.0.0.1:5500/");
}