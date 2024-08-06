<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientação a objetos</title>
</head>
<body>
    <h1>Orientação a objetos no PHP ou OOP</h1>
    <?php 
        class Pessoa {
            //Objeto pessoa
            private $nome = "Pedro";
            private $idade = '18';
            private $peso = "66kg";  
            
            public function crescer(){
                $this->comer();
                echo "estou crescendo";
            }
            private function comer(){
                echo "estou comendo";
            }
        }
        //instanciar
        $pessoa = new Pessoa;
        $pessoa2 = new Pessoa;

        $pessoa -> crescer();
    ?>
</body>
</html>