<?php
    require '../vendor/autoload.php';
    //include '../Nucleo/controlador.php';
    //include '../Nucleo/mensagem.php';
    //include '../Nucleo/helpers/helper.php';

    $documento = new \Bissolli\ValidadorCpfCnpj\CPF('48841821892');

    var_dump($documento->isValid());


    
?>