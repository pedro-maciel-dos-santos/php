<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        /*final*/ class Filha {

           /* protected function FuncaoTeste(){
                echo "chamando função teste";
            }*/

            private function FuncaoTeste(){
                echo "chamando função teste";
            }

            public function mostrarOla(){
                $this->FuncaoTeste();
                echo "<br>";
                echo "Olá Mundo!";
            }
        }
        class Pai extends Filha{

            public function mostrarOla(){
                parent::mostrarOla();
                echo "<br>";
                echo "Nova função!";
            }

            public function mostrarTchau(){
                echo "Tchau Mundo!";
                echo "<br>";
               // $this->FuncaoTeste();
            }
        }
        //$pai = new Pai;
        //$pai->mostrarTchau();

        $pai = new Pai;

        //$pai -> mostrarTchau();
        $pai -> mostrarOla();

        //$pai -> mostrarOla();
        
        //$filha->mostrarOla();
    ?>
</body>
</html>