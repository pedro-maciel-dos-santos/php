<?php
    namespace sistema\controlador;

    use sistema\Nucleo\Controlador;

    class SiteControlador extends Controlador{

        public function __construct()
            {
                parent::__construct('');
            }

        public function index():void{
            echo $this->template->renderizar('index.html', ['tutulo' => 'teste de titulo', 'subtitulo'=> 'teste de subtitulo']);
        }
    }
?>