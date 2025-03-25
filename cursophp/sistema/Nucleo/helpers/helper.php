<?php
namespace sistema\Nucleo;

    class Helpers{


        public static function saudacao(){
            return 'boa tarde!';
        }
    
        public static function resumirTexto(string $texto, int $limite, string $continue = '....'):string{
    
            $textoLimpo = trim($texto);
            if(mb_strlen($textoLimpo) <= $limite){
                return $textoLimpo;
            }
            $resumirTexto = mb_substr($textoLimpo, 0, mb_strpos(mb_substr($textoLimpo, 0, $limite), ''));
    
            return $resumirTexto.$continue;
        }
    
        public static function validarCpf():bool{
        $cpf = '48841821892';
    
        $cpf = self::limparNumero($cpf);
            
        if(mb_strlen($cpf) !=11 ||  preg_match('/(\d)\1{\10}/', $cpf)){
            return false;  
        }
        for ($t = 9; $t < 11; $t++){
            for ($d = 0, $c = 0; $c < $t; $c++){
                $d += $cpf[$c] * (($t +1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d){
                return false;
        }
        else {
                return true;
        }
    }
    }
    public static function limparNumero(string $numero):string{
        return preg_replace('/[^0-9]/', '', $numero);
    }


}
//------------------------------------------------------------------------
//

    /**
     * Resume um texto
     * @param string $texto texto para resumir
     * @param int $limite quantidade de caracteres
     * @param string $continue opcional - o que deve ser exibido ao final do resumo
     * @return string texto resumido
     * $this -> objetos
     * self:: -> staticos
     */

//------------------------------------------------------------------------
//
?>