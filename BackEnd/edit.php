<?php

require_once("./banco.php");
require_once("./editar.php");



$id = $_GET['id'];

$nome = filter_input(INPUT_POST, 'nome');
$endereco = filter_input(INPUT_POST, 'endereco');
$data = filter_input(INPUT_POST, 'data');

$select = $conn->prepare("SELECT * FROM usuario WHERE id = $id");

if ($id) {
    $select->execute();

    $dados = $select->fetchAll();
}

$update = $conn->prepare("UPDATE usuario SET nome = :nome , endereco = :endereco , data_nascimento = :data WHERE id = $id");

$update->bindParam(':nome', $nome);
$update->bindParam(':endereco', $endereco);
$update->bindParam(':data', $data);


if ($nome and $endereco and $data) {
    $update->execute();

    header("location:  http://127.0.0.1:5500/");
} else {
    header("location:  http://127.0.0.1:5500/");
}