<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public, Private e Static</title>
</head>
<body>
    <?php 
        include('index2.php');

        //instancia de objeto

        $exemplo = new Exemplo();
        $exemplo->setVar1('Pedro');
        echo $exemplo->pegaVar1();

        echo "<hr>";

        $exemplo2 = new Exemplo();
        $exemplo2->setVar1('Joao');
        echo $exemplo2->pegaVar1();



        //$exemplo->$var1 = 'olá';

       // $exemplo->var2 = 'Pedro';
        /*
        echo "$exemplo->var2";
        echo "<br>";
        $exemplo2 = new Exemplo;
        
        $exemplo2->var2 = "João";

        echo $exemplo2->var2;

        */      

        //Exemplo::$var3 = 'Outra variável';
        //echo Exemplo::$var3;

        //Exemplo::metodoEstatico();
    ?>
</body>
</html>