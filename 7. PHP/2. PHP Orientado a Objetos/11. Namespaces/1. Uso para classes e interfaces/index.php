<?php
/*
    Namespaces possibilitam o agrupamento de classes, interfaces, funções e constantes 
    visando evitar conflitos entre seus respectivos nomes
*/
    namespace A;
    class Cliente implements CadastroInterface, \B\CadastroInterface {
        public $nome = 'Duarte';

        public function __construct () {
            echo '<pre>';
            print_r (get_class_methods ($this));
            echo '</pre>';
        } 
        public function __get ($atributo) {
            return $this -> $atributo;
        }
        public function salvar () {
            echo 'Salvo com sucesso!';
        }
        public function remover () {
            echo 'Removido com sucesso';
        }
    }
    interface CadastroInterface {
        public function salvar ();
    }

    $x = new Cliente ();

    echo '<pre>';
    print_r ($x);
    echo '</pre>';

    echo $x -> __get ('nome'); 

    echo '<hr>';
 
// ---------------------------------------------------------------------------

    namespace B;
    class Cliente implements \A\CadastroInterface, CadastroInterface {
        public $nome = 'Charles';

        public function __construct () {
            echo '<pre>';
            print_r (get_class_methods ($this));
            echo '</pre>';
        }
        public function __get ($atributo) {
            return $this -> $atributo;
        }
        public function salvar () {
            echo 'Salvo com sucesso!';
        }
        public function remover () {
            echo 'Removido com sucesso!';    
        }
    }
    interface CadastroInterface {
        public function remover ();
    }

    $x = new Cliente ();

    echo '<pre>';
    print_r ($x);
    echo '</pre>';

    echo $x -> __get ('nome');


// ---------------------------------------------------------------------------

/*$
    x = new \A\Cliente ();

    echo '<pre>';
    print_r ($x);
    echo '</pre>';

    echo $x -> __get ('nome');
*/
?>