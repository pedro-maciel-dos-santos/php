<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <article>
        <a href="resolu.php">Ir para a resolução do exercício</a>
    </article>
    <?php
        $salario = $_GET['sal']??0;
        $min = 1.412;
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$1.412,00</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php
            $quantmin = $salario / $min;
            $sobra = $salario % $min;
            $tot = (integer) $quantmin;
            //echo "<p>Quem recebe um salário de $salario ganha $min salários mínimos + $sobra.";
            echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>" . number_format($tot, 0) . " salários mínimos</strong> + <br>" . numfmt_format_currency($padrao, $sobra, "BRL");
        ?>
    </section>
</body>
</html>