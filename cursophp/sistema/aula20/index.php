<?php
    $pagina = $_GET['pagina'];
    echo $pagina = (filter_input(INPUT_GET, 'pagina', FILTER_VALIDATE_INT)?? 1);

    echo '<hr>';

    $limite = 5;
    $offset = ($pagina - 1) * $limite;

    $posts = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20, 21, 22, 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20, 21, 22, 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20, 21, 22, 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20, 21, 22, 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20, 21, 22];


    /*
    array_slice serve para carregar poucos registros

    para criar um carregamento de muitos registros nós comentamos o:
    $paginar = array_slice($posts, $offset, $limite);

        $posts = (new Registros()):

        $total = $posts->busca(null,'COUNT(id)', 'id')->total();

        $paginar = $posts->busca()->limite($limite)->offset($offset)->resultado(true);

            $total = ceil($total / $limite);
--------------------------------------------------------------------------------------

    Podemos colocar um limite usando o array_slice, porém não poderá acessar todas as páginas.

    
    $posts = (new Registros())->busca()->limite(100)->resultado(true);

    Haverá um erro de objeto por não converter para string, pois estaremos trabalhando com objetos

    dentro do foreach:

        foreach ($paginar as $spots){
        echo $posts->conteudo.'<br>';
    }

    foreach ($paginar as $spots){
        echo $posts->id.' - '. $posts->conteudo.'<br><br>';
    }
    */
    $paginar = array_slice($posts, $offset, $limite);

    $total = ceil(count($posts) / $limite);

    foreach ($paginar as $posts){
        echo $posts.'<br>';
    }
    echo '<hr>';
    echo "página {$pagina} de {$total}";
    echo '<hr>';
    
    if($pagina > 1){
        echo '<a href="?pagina='.($pagina - 1).'">Anterior</a> ';
    }

    $inicio = max(1, $pagina - 2);
    $fim = min($total, $pagina + 2);

    for($i = $inicio; $i <= $fim; $i++){
        if ($i == $pagina){
            echo $i. '  ';
        } else {
            echo '<a href="?pagina='.$i.'">'.$i.'</a> ';

        }
    }
 

    if($pagina < $total){
        echo '<a href="?pagina='.($pagina + 1).'">Próxima</a>';
    }

?>