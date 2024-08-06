<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições</title>
</head>
<body>
    <h1>Condições e Constantes no PHP</h1>
    <?php
    /*
        $nome = 10;
        $nome1 = "10";
        
        if ($nome == $nome1) {
            echo 'As variáveis ' . $nome . ' e ' . $nome1 . ' são iguais.';
        } else  {
            echo "as variáveis $nome e $nome1 não são iguais";
        }
    */

    //Constantes 

        define('DOMINIO', 'https://meudominio.com');

        echo DOMINIO;


    ?>
</body>
</html>