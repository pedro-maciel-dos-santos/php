<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        session_start();
        if(isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
        }
        */
        /*
        Uma maneira de limpar a sessão da memória

        session_start();
        unset($_SESSION['nome']);
        */
        /*
        
        Para destruir TODAS as sessões criadas

        session_start();
        session_destroy();
        */
        session_start();
        $_SESSION['nome'] = 'pedro';
        $_SESSION[0]['nome'] = 'pedro';
        echo $_SESSION['nome'];
        //unset($_SESSION['nome']);
        session_destroy();
    ?>
</body>
</html>