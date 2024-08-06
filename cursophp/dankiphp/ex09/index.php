<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch e Break</title>
</head>
<body>
    <?php
        $nome = "Pedro";
        
        switch($nome){
            case "Pedro";
                echo "Minha variável é Pedro";
                break;
            case "João";
                echo "Minha variável é João";
                break;
            case "Christian";
                echo "Minha variável é Christian";
                break;
        }
        //Break para loop for, while, do, foreach e switch
        //Continue para loop for, while, do, foreach
        echo "<hr>";
        for($i = 0; $i < 10; $i++){
            if($i == 5 || $i == 8)
                continue;
            echo $i;
            echo "<hr>";
            /*if($i == 5)
                break;*/
        }
    ?>
</body>
</html>