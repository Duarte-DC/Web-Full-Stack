<?php
    namespace B;

    class Cliente implements CadastroInterface {
        public $nome = 'Charles';

        public function __construct () {
            echo '<pre>';
            print_r (get_class_methods ($this));
            echo '</pre>';
        }

        public function __get ($atributo) {
            return $this -> $atributo;
        }
        public function remover () {
            echo 'Removido com sucesso';
        }
    }
    interface CadastroInterface {
        public function remover ();
    }
?>