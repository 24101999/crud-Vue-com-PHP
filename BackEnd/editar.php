<?php

// require_once('./get.php');
// require_once('./edit.php');

require_once('./banco.php');

$id = $_GET['id'];
$getup = $conn->prepare("SELECT * FROM usuario WHERE id = $id");
if ($id) {
    $getup->execute();

    $get = $getup->fetchAll();
}
?>


<style>
.form {
    display: flex;
    justify-content: center;
}

.form form {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 5px;
    border: 1px solid;
    padding: 5px;
}

.form form input {
    width: 100%;
}
</style>

<div class="form">
    <form method="post" action="http://localhost:1999/edit.php?id=<?= $get[0]['id'] ?>">
        <input type="text" name="nome" value="<?= $get[0]['nome'] ?>" />
        <input type="text" name="endereco" value="<?= $get[0]['endereco'] ?>" />
        <input type="date" name="data" value="<?= $get[0]['data_nascimento'] ?>" />
        <button type="submit">editar</button>
    </form>
</div>