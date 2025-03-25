<?php 
    echo '<h1>Veja este arquivo abaixo</h1>';

    //Para incluir um arquivo. Caso não seja encontrado o arquivo incluido, os outros comandos continuarão funcionando
    include_once ('conf.php');
    
    //Para requerir o arquivo. Caso não seja encontrado o arquivo requerido, nenhum comando funcionará
    require_once ('func.php');

    //O comando _once serve para exibir apenas uma vez o arquivo, por isso que mesmo adicionando um include e um require apareceu apenas uma vez o arquivo conf.php

?>