<?php

define('URL_PRODUCAO', 'https://pedrotech.com');
define('URL_DESENVOLVIMENTO', 'localhost/cursophp/curso-php-yt/aula09');

    function url(string $url): string{
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        $ambiente = ($servidor == "localhost" ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

        if(str_starts_with($url, '/')){
            return $ambiente.$url;
        }

        return $ambiente.'/'.$url;

    }

    function localhost(): bool{
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

        if($servidor == "localhost"){
            return true;
        } else {
            return false;
        }
    }

    //var_dump(localhost());
    echo '<hr>';
    echo url('admin');
/*
    echo '<pre>';
    var_dump($_SERVER);
    echo '</pre>';
    */
?>