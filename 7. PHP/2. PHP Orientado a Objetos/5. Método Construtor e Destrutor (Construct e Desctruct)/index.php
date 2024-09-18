<?php
    class Pessoa {
        public $nome = null;

        function __construct ($nome) {
            $this -> nome = $nome;
        }
        function __destruct () {
            echo 'Objeto removido';
            // $this -> nome = null;
        }
        public function __get ($atributo) {
            return $this -> $atributo;
        }
        function correr () {
            return substr ($this -> __get ('nome'), 0, 6) . ' está a correr';
        }
    }

    $pessoa = new Pessoa ('Duarte Charles');

    echo 'Nome: ' . $pessoa -> __get ('nome');
    echo '<br> <br>' . $pessoa -> correr ();

    echo '<br> <br>';
    unset ($pessoa); // chamada do metodo destruct
?>