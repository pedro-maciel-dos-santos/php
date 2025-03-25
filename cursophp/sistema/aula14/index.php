<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<?php 
    include '../Nucleo/mensagem.php';

/*
    $msg = new Mensagem();

    //echo $msg->renderizar();

    echo $msg->sucesso("Mensagem de sucesso")->renderizar();
    echo $msg->erro("Mensagem de erro")->renderizar();
    echo $msg->alerta("Mensagem de alerta")->renderizar();
    echo $msg->info("Mensagem de info")->renderizar();

    echo '<hr>';

    var_dump($msg);
*/


//echo (new Mensagem())->sucesso('Mensagem de sucesso')->renderizar();

use sistema\Nucleo\Mensagem;
use sistema\Nucleo\Mensagem as msg;


echo (new msg)->sucesso("Mensagem de secesso");
?>