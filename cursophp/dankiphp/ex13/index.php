<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Bonus</title>
</head>
<body>
    <?php 
    
        $nome = "Pedro";
        if ($nome == "Pedro"):
            echo "Verdade";
            echo "<br>";
        endif;


        $contador = 0;
        while ($contador < 10):
            $contador++;
            echo "oi => $contador";
            echo "<br>";
        endwhile;
    ?>
</body>
</html>