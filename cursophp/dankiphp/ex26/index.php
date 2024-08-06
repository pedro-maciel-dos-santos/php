<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');

    $id = 3;

    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");


    if($sql->execute(array($id))){
        echo "Meu cliente foi deletado com sucesso!";
    }

    //para proteger de invasores, no prepare() colocamos o valor como ? e mudamos o valor dentro do if($sql->execute(array(valor a ser mudado))){echo "valor mudado";} serve para todos os valores como id, nome, idade e todas as queries.
?>