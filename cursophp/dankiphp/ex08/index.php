<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para String</title>
</head>
<body>
    <?php 
        $conteudo = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto quos hic laudantium exercitationem impedit nisi obcaecati cumque rem beatae, sit debitis nobis sed est vero recusandae doloremque quae corrupti dolore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam exercitationem eius, explicabo hic possimus nulla harum expedita velit! Eaque, veniam? Soluta sit obcaecati ab quam esse, totam aliquam voluptatem quod.';

        //Serve para recortar uma String.
        echo substr($conteudo, 0, 11);
        echo "<hr>";
        
        //Serve para recortar com base no espaço
        $nome = 'Pedro Maciel dos Santos';

        $nomes = explode(' ',$nome);

        print_r($nomes);
        echo "<hr>";
        
        //Serve para juntar um array com um delimitador
        //No caso o espaço
        $nomes = implode(' ',$nomes);

        echo "$nomes";

        //Strip_tags retira todos os códigos HTML
        $var = "<h1>Pedro</h1>Outra coisa";
        echo "<hr>";
        echo strip_tags($var);
        echo "<hr>";
        //Htmlentities que mostra o código HTML na página.
        echo htmlentities("<div></div>");
    ?>
</body>
</html>