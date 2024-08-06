<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <h1>Laço de repetição no PHP</h1>
    <?php
    $contador = 9;
    
        //Looping usando for
        /*for($contador = 0; $contador < 10; $contador++){
            echo "olá mundo <hr>";
        }*/

        //Looping usando while
        /*while($contador < 6) {
            echo "Tudo bem ?";
        }*/

        //Looping usando do
        do{
            echo "Passo $contador";
            echo "<hr>";
            $contador++;
        } while($contador <= 10)
    ?>
</body>
</html>