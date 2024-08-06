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
        $numero = $_GET['num']??0;
        $qua = sqrt($numero);
        $cub = $numero ** (1/3);

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Analisando o <strong>número $numero</strong>, temos:</p><ul>
            <li>A sua raiz quadrada é <strong>" . number_format($qua, 3) ."</strong></li>
            <li>A sua raiz cúbica é <strong>" . number_format($cub, 3) . "</strong></li>
            </ul>"
        ?>
    </section>
</body>
</html>