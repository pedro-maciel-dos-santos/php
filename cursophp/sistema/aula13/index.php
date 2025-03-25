<?php
    
function validarCpf():bool{
    $cpf = '48841821892';

    $cpf = limparNumero($cpf);
        
    if(mb_strlen($cpf) !=11 ||  preg_match('/(\d)\1{\10}/', $cpf)){
        return false;  
    }
    for ($t = 9; $t < 11; $t++){
        for ($d = 0, $c = 0; $c < $t; $c++){
            $d += $cpf[$c] * (($t +1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d){
            return false;
    }
    else {
            return true;
    }
}
}
function limparNumero(string $numero):string{
    return preg_replace('/[^0-9]/', '', $numero);
}
var_dump(validarCpf());

    //echo $LimparNumero =  preg_replace('/[^0-9]/', '', $cpf);
/*
    for ($t = 9; $t < 11; $t++){
        for ($d = 0, $c = 0; $c < $t; $c++){
            $d += $cpf[$c] * (($t +1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d){
            echo 'CPF inválido!';
        } else {
            echo 'CPF válido!';
        }
    }
*/
?>