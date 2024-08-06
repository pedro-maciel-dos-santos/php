<?php 
/*
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8.2', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY cargo LIMIT 3");

    //GROUP BY, ORDER BY, ASC e DESC, LIMIT { ordem }

    //$sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY nome ASC LIMIT 4");

    //LIMIT 0,3 | 0 determina quem começa na ordem (Ana), se colocarmos o número 1 então irá começar com (Ananda) | 3 determina a quantidade que vai aparecer na viewport

    $sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY nome ASC LIMIT 0,3");
    $sql->execute();

    $clientes = $sql->fetchAll();
    foreach($clientes as $key => $value) {
        echo $value['nome'];
        echo "<hr>";
    }
    */

    $pdo = new PDO('mysql:host=localhost;dbname=modulo8.2', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes` . `cargo` = `cargos` . `id`");

    //LEFT JOIN é esquerda em inglês, ou seja, aparecerá os `clientes`, mesmo que não encontre o cargo me retorne o cliente mesmo assim.

    //RIGHT JOIN é a esquerda em inglês, ou seja, aparecerá cargos, mesmo que não encontre o cliente me retorne o cargo mesmo assim.

    $sql = $pdo->prepare("SELECT * FROM `clientes` RIGHT JOIN cargos ON `clientes` . `cargo` = `cargos` . `id`");
    $sql->execute();

    $clientes = $sql->fetchAll();
    foreach($clientes as $key => $value) {
        echo $value['nome'];
        echo ' | ';
        echo $value['nome_cargo'];
        echo "<hr>";
    }


?>