<?php 
    declare(strict_types=1);

    $pdo = require 'connect.php';
    $sql = 'insert into produtos(descricao) values(?)';

    $prepare = $pdo->prepare($sql);

    $prepare->blindParam(1, $_GET['descricao']);
    $prepare->execute();

    echo $prepare->rowCount();
?>