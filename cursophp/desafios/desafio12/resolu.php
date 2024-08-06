<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET['num']??0;
    ?>
     <article>
        <a href="index.php">Voltar para o exercício</a>
    </article>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="num">Qual é o total de segundos?</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $sobra = $num;
            //Total de semanas
            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;
            //Total de dias
            $dia = (int)($sobra / 86_400);
            $sobra = $sobra % 86_400;
            //Total de horas
            $hora = (int)($sobra / 3_600);
            $sobra = $sobra % 3_600;
            //Total de minutos
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;
            //Total de segundos
            $segundo = $sobra;
            //Echo
            echo "<p>Analisando o valor que você digitou, <strong>$num segundos</strong> equivalem a um total de:</p>";
            print "<ul><li>$segundo segundos</li><li>$minuto minutos</li><li>$hora horas</li><li>$dia dias</li><li>$semana semanas</li></ul>";

        ?>

    </section>
</body>
</html>