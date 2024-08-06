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
        $seg = $num % 60;
        $min =  $seg / 60;
        //$hora = ;
        //$dia = ;
        //$sem = ;
        $rest = $num % 60;
    ?>
    <article>
        <a href="resolu.php">Ir para a resolução do exercício</a>
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
            echo "<p>Analisando o valor que você digitou, <strong>$num segundos</strong> equivalem a um total de:</p>";
            print "<ul><li>$seg segundos</li><li>$min minutos</li><li>$hora horas</li><li>$dia dias</li><li>$sem semanas</li></ul>";
        ?>
    </section>
</body>
</html>