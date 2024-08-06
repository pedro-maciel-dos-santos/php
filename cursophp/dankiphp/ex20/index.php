<?php 
    include('class01.php');
    include('class02.php');

    use \Sessao1\Class1 as classe_exemplo;

    $class = new classe_exemplo;

    //$class = new Class1();

    //$class = new \Sessao1\Class1();
?>