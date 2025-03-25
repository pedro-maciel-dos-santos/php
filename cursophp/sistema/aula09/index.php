<?php 
    include 'constante.php';

    echo SITE_NOME;
    print '<hr>';
    echo constant('SITE_NOME');


    //const não funciona dentro de estruturas condicionais
    /*
    if(true){
        const CARRO = 'marca';
    }
    */
    //define() funciona dentro de estruturas condicionais
    if(true){
        define('CARRO', 'marca');
    }
?>