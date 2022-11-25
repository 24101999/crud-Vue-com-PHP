<?php

require_once('./banco.php');

$nome = filter_input(INPUT_POST, 'nome');
$endereco = filter_input(INPUT_POST, 'endereco');
$data = filter_input(INPUT_POST, 'data');

$insert = $conn->prepare('INSERT INTO usuario (nome, endereco, data_nascimento) VALUES (:n,:e,:d)');

$insert->bindParam(':n', $nome);
$insert->bindParam(':e', $endereco);
$insert->bindParam(':d', $data);

if ($nome and $endereco and $data) {

    $insert->execute();
    header('location:' . 'http://127.0.0.1:5500/index.html');
}