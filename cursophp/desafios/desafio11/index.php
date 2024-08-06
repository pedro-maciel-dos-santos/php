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
        $produto = $_GET['produto']??0;
        $reajuste = $_GET['reajuste']??0;
        $precof = $produto + ($produto / 100 * $reajuste);
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="produto">Preço do Produto (R$)</label>
            <input type="number" name="produto" id="produto" value="<?=$produto?>">
            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" value="<?=$reajuste?>" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            echo "<p>O produto que custava " . numfmt_format_currency($padrao, $produto, "BRL") . ", com <strong>$reajuste% de aumento</strong> vai passar a custar " . numfmt_format_currency($padrao, $precof, "BRL") . " a partir de agora.</p>";
        ?>
    </section>
    <script>
        mudaValor()
        function mudaValor() {
            p.innerText = reajuste.value;
        }
    </script>
</body>
</html>