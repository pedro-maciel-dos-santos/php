<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        
        $real = $_GET["din"] ?? 0;

        $dolar = $real / $cotacao;
        //echo "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".");

        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        echo "<p>Seus <strong> " . numfmt_format_currency($padrao, $real, "BRL") . " </strong> equivalem a <strong> " . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
<button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>