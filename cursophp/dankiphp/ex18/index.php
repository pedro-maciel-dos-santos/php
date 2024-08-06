<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
</head>
<body>
    <?php 
        include('interface1.php');

        class Teste implements Interface1{
            public function printOnScreen($par){
                echo $par;
            }
        }

        $teste = new Teste;

        $teste->printOnScreen('Olá Mundo!');
    ?>
</body>
</html>