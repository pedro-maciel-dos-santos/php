<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php 
     $arr = array('Gabriel', 'João', 'Pedro', 'Samuel', 'Mario');

     /*foreach($arr as $key => $value) {
        echo "$key";
        echo "=>";
        echo "$value";
        echo "<hr>";
     }*/

     $tot = count($arr);
     for ($i = 0; $i < $tot; $i++){
        echo "$arr[$i]";
        echo '<br>';
     }
    ?>
</body>
</html>