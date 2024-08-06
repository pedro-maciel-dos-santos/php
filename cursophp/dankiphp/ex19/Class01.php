<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Mágicos</title>
</head>
<body>
    <?php 
        class Class1{

            private $nome;
            private $idade;

           public function __construct($nome, $idade){
                $this->nome = $nome;
                $this->idade = $idade;
            }

            public function getNome(){
                return $this->nome;
            }
            public function getIdade(){
                return $this->idade;
            }
        }
    ?>
</body>
</html>