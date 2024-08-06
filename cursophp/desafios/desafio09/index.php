<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1']??1;
        $peso1 = $_GET['peso1']??1;
        $valor2 = $_GET['valor2']??1;
        $peso2 = $_GET['peso2']??1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?=$valor2?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $simres = ($valor1 + $valor2) / 2;
            $pon = $valor1 * $peso1 + $valor2 * $peso2;
            $pon2 = $peso1 + $peso2;
            $ponres = $pon / $pon2;
            echo "<p>Analisando os valores:</p>
            <ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($simres, 2).".</li><li>A <strong>Média Aritmética Ponderada</strong> com pesos e é igual a ". number_format($ponres, 2) .".</li>
            </ul>";

        ?>
    </section>
</body>
</html>