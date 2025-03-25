<?php 
    /*function validarEmail(string $email):bool{
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }*/

    function validarUrl(string $url): bool{
        if(mb_strlen($url) < 10){
            return false;
        }
        if(!str_contains($url, '.')){
            return false;
        }
        if(str_contains($url, 'http://') or str_contains($url, 'https://')){
            return true;
        }
        return false;
    }

    function validarUrlComFiltro(string $url): bool{
        return filter_var($url, FILTER_VALIDATE_URL);
    }
?>