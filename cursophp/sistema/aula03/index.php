<?php 
/*
    if ($valor){
        echo $valor;
    } else {
        echo 0;
    }
*/

    //echo ($valor ? $valor : 0);
    //echo ($valor ?: 0);

    echo formatarNumero(5000);

    function formatarNumero(float $valor): string{
        return 'R$ '.number_format($valor, 2, ',', '.');
    }
?>