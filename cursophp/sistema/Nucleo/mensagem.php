<?php
    namespace sistema\Nucleo;

/**
 * @author Pedro Santos
 */
    class Mensagem {
        private $texto;
        private $css;


        public function __toString()
        {
            return $this->renderizar();
        }


        public function sucesso(string $mensagem):Mensagem{
            $this->css = 'alert alert-success';
            $this->texto = $this->filtrar($mensagem);
            return $this;
        }
        public function erro(string $mensagem):Mensagem{
            $this->css = 'alert alert-danger';
            $this->texto = $this->filtrar($mensagem);
            return $this;
        }
        public function alerta(string $mensagem):Mensagem{
            $this->css = 'alert alert-warning';
            $this->texto = $this->filtrar($mensagem);
            return $this;
        }
        public function info(string $mensagem):Mensagem{
            $this->css = 'alert alert-primary';
            $this->texto = $this->filtrar($mensagem);
            return $this;
        }
        
        public function renderizar():string{
          return "<div class='{$this->css}'>{$this->texto}</div>";
        }

        private function filtrar(string $mensagem):string{
            return filter_var ($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
        }
    }
?>