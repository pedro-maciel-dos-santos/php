<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        abstract class Teste {

            public function func1(){
                echo "chamando função 1";
            }

            abstract function func2();
        }

        class Principal02{
            public static function outroMetodoEstatico(){
                echo"Meu outro metodo estatico!";

            }
        }

        class Principal extends Teste{

            public function func2(){
                echo "Estou declarando oficialmente um método abstrato.";
            }
            public static function metodoestatico(){
                echo "Método Estatico";
            }
            public function funcao(){
               // Principal::metodoestatico();
               Principal02::outroMetodoEstatico();
               echo "<br>";
               self::metodoestatico();
            }

        }
        $principal = new Principal;
        $principal->func1();

        echo "<br>";

        $principal->func2();

        echo "<br>";

        $principal::metodoestatico();

        echo "<br>";

        $principal = new Principal;
        $principal->funcao();
    ?>
</body>
</html>