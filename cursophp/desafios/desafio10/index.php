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
        $nasci = $_GET['nasci']??0;
        $ano = $_GET['ano']??0;
        $idade = $ano - $nasci;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasci">Em que ano você nasceu?</label>
            <input type="number" name="nasci" id="nasci" value="<?=$nasci?>">

            <label for="ano">Quer saber sua idade em que ano? (atualmente estamos em 2024)</label>
            <input type="number" name="ano" id="ano" value="<?=$ano?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            print "<p>Quem nasceu em $nasci vai ter <strong>$idade anos</strong> em $ano!</p>"
        ?>
    </section>
</body>
</html>