<?php 
    function slug(string $string):string{
        $mapa['a'] = 'ÀÁÂÃÄÆÅàáâãåäæÈÉÊËèéêëÐÌÍÎÏïìíîÒÓÔÕØÖøöòóôõÙÚÛÜüùúûÇçÑñÝýß@#$%&*()_-+={[}]/?¨|;:.,\\\'<>°¢£¬';
        $mapa['b'] = 'aaaaaaaaaaaaaaeeeeeeeediiiiiiiioooooooooooouuuuuuuuccnnyyb                                  ';
        $url = mb_convert_encoding($string, 'ISO-8859-1', "UTF-8");
        return $url;
    }
?>