<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');

    $id = 2;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Luigi', sobrenome='Palmeira' WHERE id=$id");

    //$sql = $pdo->prepare("UPDATE `clientes` SET nome='Luigi', sobrenome='Palmeira' WHERE nome='Frangolino' AND sobrenome='Silveira'");

    // AND-&& funciona como E / OR-|| funciona como OU

    if($sql->execute()){
        echo "Meu cliente foi atualizado com sucesso!";
    }
?>

