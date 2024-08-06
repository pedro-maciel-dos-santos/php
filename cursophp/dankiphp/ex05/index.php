<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Die e Sleep</title>
</head>
<body>
    <h1>Aprendendo Die e Sleep no PHP</h1>
    <?php 
        //Usando o Sleep
        sleep(2);
        echo "Desculpe o atraso!";
        sleep(3);
        echo " Desculpe novamente!";

        //Usando o Die
        $nome = "Pedro";
        if ($nome == "Pedro"){
            //continuamos o código
            print "Tudo certo!";
        } else {
            die();
        }

        echo "<br>Se o código morrer, essa mensagem não irá aparecer.";

    ?>
</body>
</html>