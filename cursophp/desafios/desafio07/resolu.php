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
        $minimo = 1_412.00;
        $salario = $_GET['sal'];
    ?>
    <article><a href="index.php">Voltar para o exercício</a></article>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo "<p>Ganha <strong>$tot salários mínimos</strong> + " . number_format($dif, 2, ",", ".") . "</p>.";
        ?>
    </section>
</body>
</html>