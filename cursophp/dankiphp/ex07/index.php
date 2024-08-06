<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
    /*
        date_default_timezone_set('America/Sao_Paulo');


        $data = date('d/m/Y H:i:s',time()+(60*10));
        print $data;
        */
        $titulo_site = "Título do meu site";
        include('header.php');
    ?>

    <h1>Meu conteúdo!</h1>

    <?php 
    include('footer.php');
    ?>
</body>
</html>