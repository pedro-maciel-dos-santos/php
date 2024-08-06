<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para array</title>
</head>
<body>
    <?php 
    /*
        array_merge serve para unir os arrays

        $arr1 = array("chave1"=>"valor1","chave2"=>"valor2");
        $arr2 = array("chave3"=>"valor3","chave4"=>"valor4");
        $arr3 = array("chave5"=>"valor5");
        $resultado = array_merge($arr1, $arr2, $arr3);
        print_r($resultado);
    */
    /*
        array_intersect_key serve para retornar valores com a mesma chave em 1 ou mais arrays

        $arr1 = array("chave1"=>"valor1","chave2"=>"valor2");
        $arr2 = array("chave2"=>"outro valor","chave1"=>"outro valor","chave3"=>"valor3","chave4"=>"valor4");

        print_r(array_intersect_key($arr1, $arr2));
    */
    /*
        array_map serve para aplicar uma função em todos os valores do array
        
        $arr = ['<p>Pedro</p>', 'Joao', '<h1>Abner</h1>'];
        print_r(array_map('strip_tags', $arr));
    */

    ?>
</body>
</html>