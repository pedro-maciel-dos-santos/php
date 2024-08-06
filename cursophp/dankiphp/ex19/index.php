<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('Class01.php');
        $teste = new Class1('Pedro',18);

        echo $teste->getNome();
        print "<hr>";
        echo $teste->getIdade();
    ?>
</body>
</html>