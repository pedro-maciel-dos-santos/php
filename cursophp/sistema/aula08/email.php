<?php
    include 'index.php';

    $url = 'https://unsetzinho.';

    /*if(validarEmail('teste@gmail.com')){
        echo 'Endereço de email válido!';
    } else {
        echo 'Endereço de email inválido!';
    }*/
    //var_dump(validarEmail('teste@gmail.com'));

    var_dump(validarUrl($url));
    echo '<hr>';
    var_dump(validarUrlComFiltro($url));

    
    ?>