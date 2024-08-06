<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = $_GET['v1']??0;
        $valor2 = $_GET['v2']??1;
    ?>
    <article>
        <a href="resolu.php">Ir para a resolução do exercício</a>
    </article>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
            $res = $valor1 / $valor2;
            $rest = $valor1 % $valor2;
            echo "<p>$valor1 dividido por $valor2 = <strong>$res</strong> <br>com o resto da divisão sendo: $rest</p>"
        ?>
    </section>
</body>
</html>