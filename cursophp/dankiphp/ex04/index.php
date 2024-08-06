<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Multidimensionais</title>
</head>
<body>
    <?php 
        //array single
        $arr = ['Guilherme', 'João'];
        $arr = array('Guilherme', 'chave2' => 'João');

        $arr[0] = 'Guilherme';
        $arr[1] = 'João';
        echo $arr[1];
        echo "<br>";

        //arrays multidimensionais
        $arr2 = array(array('Pedro', 'Christian'), array(23, 45));
        echo $arr2[1][0];
        echo "<br>";

        $arr3[0] = array('Flávio', 'Fernando');
        echo $arr3[0][0];
    ?>
</body>
</html>