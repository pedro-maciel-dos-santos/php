<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=modulo8', 'root', '');
    /*
    $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");

    $sql->execute(array($_GET['categoria_id']));

    $info = $sql->fetchAll();
    
    foreach ($info as $key => $value){
        echo "Título: " . $value['titulo'];
        echo "<br>";
        echo "Notícia: " . $value['conteudo'];
        echo "<hr>";
    }
    */
    /*
    for($i = 0; $i < count($info); $i++){
        echo "Título: " . $info[$i]['titulo'];
        echo "<br>";
        echo "Notícia: " . $info[$i]['conteudo'];
        echo "<hr>";
    }
    */
/*
    $sql = $pdo->prepare("SELECT * FROM categorias");

    $sql->execute();

    $info = $sql->fetchAll();
    
    foreach ($info as $key => $value){
        $categoria_id = $value['id'];
        echo "exibindo posts de " . $value['nome'];
        echo "<br>";
        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();
        foreach($infoPosts as $key => $value){
            echo "Título: " . $value['titulo'];
            echo "<br>";
            echo "Notícia: " . $value['conteudo'];
            echo "<hr>";
        }

    }

    */

    //Pega tudo do post, pega tudo da categorias, quero que no post o seu id seja renomeado para post_id

    $sql = $pdo->prepare("SELECT `posts`.*, `categorias`.*, `posts` . `id` AS `post_id` FROM `posts` INNER JOIN `categorias` ON `posts`.`categoria_id` = `categorias`.`id`");

    $sql->execute();

    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($info);
    echo "</pre>";
   


    /*
    foreach ($info as $key => $value){
        echo "Título: " . $value['titulo'];
        echo "<br>";
        echo "Notícia: " . $value['conteudo'];
        echo "<hr>";
    }
        */
?>