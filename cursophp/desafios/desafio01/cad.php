<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <br>
        <?php 
        $numero = $_GET["num"];
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        echo "O número escolhido é <strong>$numero</strong>";
        echo "<br>O seu antecessor é $antecessor";
        echo "<br>O seu sucessor é $sucessor";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>