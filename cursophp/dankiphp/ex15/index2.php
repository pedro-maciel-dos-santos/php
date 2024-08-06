<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
<?php
//Public funciona em qualquer lugar!
//Private só conseguimos acessar dentro da classe!
        class Exemplo {
            public $var1;
            public $var2;

            //public static $var3 = 'statico';
            /*
            public function metodo(){

            }

            public static function metodoEstatico(){
                echo 'Metodo Estatico';

            }

            private function metodo2(){

            }
            */

            function setVar1($var1){
                $this->var1 = $var1;
            }

            function pegaVar1(){
                return $this->var1;
            }
        }
    ?>
</body>
</html>