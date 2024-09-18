<?php
    class Exemplo {
        public static $atributoEstatico = 'Atributo estático';
        public $atributoNormal = 'Atributo normal';

        public function __get ($atributo) {
            return $this -> $atributo;
        }
        public static function metodoEstatico () {
            echo 'Método estático';
        }
        public function metodoNormal () {
            echo 'Método normal';
        }
    }
/*  
    Para métodos e atributos estáticos não precisa-se instanciar a classe
    -   Os atributos não estão acessiveis através do operador ->
    -   Não se pode utilizar o $this nos métodos estáticos 
*/

    echo Exemplo :: $atributoEstatico . '<br>';
    Exemplo :: metodoEstatico ();

    echo '<br> <hr> <br>';

    $x = new Exemplo ();
    echo $x -> __get ('atributoNormal') . '<br>';
    $x -> metodoNormal ();
?>