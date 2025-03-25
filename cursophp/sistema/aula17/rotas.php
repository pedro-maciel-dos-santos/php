<?php 
   
   use Pecee\SimpleRouter\SimpleRouter;

    

    SimpleRouter::get('cursophp/all.php', 'SiteControlador@index');

    SimpleRouter::setDefaultNamespace('sistema\controlador');

    SimpleRouter::start();
?>