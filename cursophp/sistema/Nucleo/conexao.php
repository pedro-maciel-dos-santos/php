<?php 
    namespace sistema\Nucleo;

    use PDO;
    use PDOException;

    class Conexao{
        private static $instancia;

        public static function getInstancia():PDO{
            if(empty(self::$instancia)){

                define('HOST', 'localhost');
                define('DB', 'modulo8');
                define('USER', 'root');
                define('PASS', '');

                try {
                    self::$instancia = new PDO('mysql:host=' .HOST. ';dbname=' .DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));


                } catch (\Throwable $e) {
                    die('Erro de conexão');
                }

                return self::$instancia;
            }
        }
    }
?>